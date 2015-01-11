<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('films', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('affiche');
			$table->date('datedesortie');
			$table->string('réalisateur');
			$table->string('acteurs');
			$table->integer('durée');
			$table->string('genre');
			$table->text('résumé');
			
			
			
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
		Schema::drop('films');
	}

}
