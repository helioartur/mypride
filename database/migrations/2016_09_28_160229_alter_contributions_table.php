<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterContributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('cuase_helpers', 'cause_helpers');

        Schema::table('cause_helpers', function (Blueprint $table) {
            $table->string('curency_code', 10);
            $table->double('value');
        });
        Schema::dropIfExists('cause_contributions');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cause_helpers', function (Blueprint $table) {
            //
        });
    }
}
