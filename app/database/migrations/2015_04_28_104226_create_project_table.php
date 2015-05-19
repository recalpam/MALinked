<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('project_id_old');
			$table->integer('student_id');
			$table->string('title');
			$table->text('description');
			$table->string('url');
			$table->boolean('batch_done');
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
		Schema::drop('project');
	}

}
