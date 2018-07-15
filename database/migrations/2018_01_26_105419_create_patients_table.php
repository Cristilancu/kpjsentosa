<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('mrn_number', 10);
			$table->string('last_name', 100);
			$table->string('first_name', 100);
			$table->date('date_of_birth');
			$table->enum('gender', ['male','female']);
			$table->string('passport_number', 20);
			$table->string('contact_number', 20);
			$table->text('address');
			$table->string('city', 100);
			$table->string('postal_code', 5);
			$table->string('state', 100);
			$table->integer('country_id')->unsigned();
			// email
			// password
			$table->enum('newsletter_subscription', ['0','1']);
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
		Schema::drop('patients');
	}

}
