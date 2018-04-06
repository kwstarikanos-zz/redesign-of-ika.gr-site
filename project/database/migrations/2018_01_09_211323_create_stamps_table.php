<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStampsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stamps', function(Blueprint $table)
		{
			$table->increments('s_id');
			$table->integer('value')->unsigned();
			$table->date('date');
			$table->integer('h_e_id')->unsigned();
			$table->date('h_hire_date');
			$table->index(['h_e_id','h_hire_date'], 'fk_stamps_hirings1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stamps');
	}

}
