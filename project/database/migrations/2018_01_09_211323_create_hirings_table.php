<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHiringsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hirings', function(Blueprint $table)
		{
			$table->integer('h_e_id')->unsigned()->index('fk_em_in_employers1_idx');
			$table->date('hire_date');
			$table->string('jobtitle', 45);
			$table->integer('h_i_id')->unsigned()->index('fk_h_i');
			$table->date('contract_expiry')->nullable();
			$table->primary(['h_e_id','hire_date']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hirings');
	}

}
