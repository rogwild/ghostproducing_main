<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_infos', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('user_id')->unsigned()->index();
                        $table->integer('phone');
                        $table->string('website');
                        $table->string('realname');
                        $table->string('patronymic');
                        $table->string('surname');
                        $table->date('birthday');
                        $table->text('about');
                        $table->string('jobs');
                        $table->string('genres');
                        $table->string('sequencer');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_infos');
	}

}
