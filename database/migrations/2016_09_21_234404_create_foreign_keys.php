<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('cause_owners', function(Blueprint $table) {
			$table->foreign('cause_id')->references('id')->on('causes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cuase_helpers', function(Blueprint $table) {
			$table->foreign('cause_id')->references('id')->on('causes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cause_contributions', function(Blueprint $table) {
			$table->foreign('cause_helper_id')->references('id')->on('cuase_helpers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('cause_owners', function(Blueprint $table) {
			$table->dropForeign('cause_owners_cause_id_foreign');
		});
		Schema::table('cuase_helpers', function(Blueprint $table) {
			$table->dropForeign('cuase_helpers_cause_id_foreign');
		});
		Schema::table('cause_contributions', function(Blueprint $table) {
			$table->dropForeign('cause_contributions_cause_helper_id_foreign');
		});
	}
}