<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('student_id');
			$table->string('location')->nullable();
			$table->string('fav_teacher')->nullable();
			$table->string('fav_class')->nullable();
			$table->text('fav_project')->nullable();
			$table->integer('rate_school')->nullable();
			$table->integer('rate_internship')->nullable();
			$table->string('specialize')->nullable();
			$table->string('school_match_ambitions')->nullable();
			$table->text('future_vision')->nullable();
			$table->string('linkedin')->nullable();
			$table->string('dribbble')->nullable();
			$table->string('behance')->nullable();
			$table->string('vimeo')->nullable();
			$table->string('youtube')->nullable();
			$table->string('facebook')->nullable();
			$table->string('email')->nullable();
			$table->string('hobbies')->nullable();
			$table->string('portfolio')->nullable();
			$table->text('why_ma')->nullable();
			$table->string('best_experience')->nullable();
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
		Schema::drop('student_info');
		//
	}

}
