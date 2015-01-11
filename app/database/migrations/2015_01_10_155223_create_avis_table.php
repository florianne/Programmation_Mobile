<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('avis', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('film_id');
			$table->integer('user_id');
			$table->date('date');
			$table->text('commentaire');
			$table->integer('note');
			
			
			
			
			
			
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
		Schema::drop('avis');
	}

}
