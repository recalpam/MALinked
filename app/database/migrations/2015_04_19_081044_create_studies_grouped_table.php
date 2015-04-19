<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudiesGroupedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('studies_grouped', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('study_id')->unsigned()->index();
			$table->foreign('study_id')->references('id')->on('studies')->onDelete('cascade');
			$table->integer('study_id_parent')->unsigned()->index();
			$table->foreign('study_id_parent')->references('id')->on('studies')->onDelete('cascade');
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
		Schema::drop('studies_grouped');
	}

}
