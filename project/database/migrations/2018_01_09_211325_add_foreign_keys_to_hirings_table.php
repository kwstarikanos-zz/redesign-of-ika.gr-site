<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHiringsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hirings', function(Blueprint $table)
		{
			$table->foreign('h_e_id', 'fk_em_in_employers1')->references('e_id')->on('employers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('h_i_id', 'fk_h_i')->references('i_id')->on('insured')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('hirings', function(Blueprint $table)
		{
			$table->dropForeign('fk_em_in_employers1');
			$table->dropForeign('fk_h_i');
		});
	}

}
