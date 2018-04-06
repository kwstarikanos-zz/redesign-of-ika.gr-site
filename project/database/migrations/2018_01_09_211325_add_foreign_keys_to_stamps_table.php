<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStampsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('stamps', function(Blueprint $table)
		{
			$table->foreign('h_e_id', 'fk_s_h')->references('h_e_id')->on('hirings')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('stamps', function(Blueprint $table)
		{
			$table->dropForeign('fk_s_h');
		});
	}

}
