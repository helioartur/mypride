<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCauseContributionsTable extends Migration {

	public function up()
	{
		Schema::create('cause_contributions', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('cause_helper_id')->unsigned()->index();
			$table->float('value');
			$table->string('currency_code', 10)->default('ECV');
			$table->integer('user_create_id')->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('cause_contributions');
	}
}