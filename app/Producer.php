<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model {

	public function tracks() {
            return $this->hasMany('App\Track');
        }

}
