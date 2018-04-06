<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInsuredTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('insured', function(Blueprint $table)
		{
			$table->increments('i_id');
			$table->integer('users_id')->unsigned()->nullable()->index('fk_insured_users_idx');
			$table->string('name', 191);
			$table->string('surname', 191);
			$table->bigInteger('afm')->unique();
			$table->bigInteger('amka')->unique();
			$table->bigInteger('ama')->unique();
			$table->boolean('employee');
			$table->boolean('retired');
			$table->integer('employment_years');
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
		Schema::drop('insured');
	}

}
