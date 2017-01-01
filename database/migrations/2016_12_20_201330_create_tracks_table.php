<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tracks', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('user_id')->unsigned()->index();
                        $table->integer('buyer_id')->unsigned()->index();
                        $table->string('name');
                        $table->string('genre');
                        $table->integer('price');
                        $table->integer('bpm');
                        $table->string('sequencer');
                        $table->string('key');
                        $table->string('cover');
                        $table->varchar('coverfilename');
                        $table->string('trackfile');
                        $table->string('megalink');
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
		Schema::drop('tracks');
	}

}
