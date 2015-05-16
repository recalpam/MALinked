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
			$table->string('fav_teacher');
			$table->string('fav_class');
			$table->text('fav_project');
			$table->integer('rate_school');
			$table->integer('rate_internship');
			$table->string('specialize');
			$table->string('school_match_ambitions');
			$table->text('future_vision');
			$table->string('linkedin');
			$table->string('email');
			$table->string('hobbies');
			$table->string('portfolio');
			$table->text('why_ma');
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
