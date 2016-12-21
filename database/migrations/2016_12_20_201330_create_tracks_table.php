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
                        $table->integer('producer_id')->unsigned()->index();
                        $table->string('name');
                        $table->string('genre');
                        $table->integer('price');
                        $table->integer('bpm');
                        $table->string('sequencer');
                        $table->string('key');
                        $table->string('cover');
                        $table->string('file');
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
