<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomValidationServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *  $rules = [
                    // other rules
                    'project_id' => 'required|exists:projects,id|belongs_to_user:projects',
                    // other rules
                ];
	 * @return void
	 */
	public function boot()
	{
		Validator::extend('belongs_to_user', function($attribute, $value, $parameters, $validator) {
                $table = $parameters[0];
                $primary_key_field = isset($parameters[1]) ? $parameters[1] : 'id';
                $user_foreign_key_field = isset($parameters[2]) ? $parameters[2] : 'user_id';

                return DB::table($table)->where($primary_key_field, '=', $value)->first()->$user_foreign_key_field == Auth::user()->id;
            });
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
