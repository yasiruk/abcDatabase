<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bltable', function($table) {
			$table->integer('blnumber');
			$table->text('shipper');
			$table->text('consignee')->nullable();
			$table->text('notifyparty')->nullable();
			
			$table->string('vessel')->nullable();
			$table->integer('voyageno');
			$table->string('portoflading');
			$table->string('portofdischarge');
			$table->integer('bookingno')->nullable();
			
			$table->text('commoditydesc');
			$table->string('indentifiedcommodity')->nullable();
			$table->smallInteger('accuracy')->nullable();
			$table->date('shiponboarddate');
			$table->integer('noofcontainers')->nullable();
			
			$table->index('blnumber');
			$table->primary('blnumber');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bltable');
	}

}
