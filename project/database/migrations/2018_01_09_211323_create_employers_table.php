<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employers', function(Blueprint $table)
		{
			$table->integer('e_id')->unsigned()->index('fk_employers_users1_idx');
			$table->string('name', 191);
			$table->string('surname', 191);
			$table->string('business', 191)->unique();
			$table->bigInteger('business_afm')->unique('employers_businessafm_unique');
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
		Schema::drop('employers');
	}

}
