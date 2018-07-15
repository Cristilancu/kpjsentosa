<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('code',2);
			$table->string('name',100);
			$table->string('calling_code', 3);
			$table->string('eu_tax', 20)->nullable();
			$table->enum('status', ['0','1'])->default(1);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('countries');
	}

}
