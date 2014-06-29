<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('timers', function($table)
		{
			$table->increments('id');

			$table->string('observation');

			$table->dateTime('start');
			$table->dateTime('end');

			$table->bigInteger('task_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('timers');
	}

}
