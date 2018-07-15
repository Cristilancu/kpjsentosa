<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavbarMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('navbar_menus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->tinyInteger('position')->unsigned();
			$table->string('category_name');
			$table->string('url');
			$table->string('class');
			$table->enum('status',[0,1])->default(1);
			$table->timestamps();
			$table->softDeletes();
			$table->string('formated_time')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('navbar_menus');
	}

}
