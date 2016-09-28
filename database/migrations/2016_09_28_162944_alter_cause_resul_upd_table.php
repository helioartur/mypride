<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCauseResulUpdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cause_results', function (Blueprint $table) {
            //
            $table->integer('cause_id')->unsigned()->index();
        });
        Schema::table('cause_results', function (Blueprint $table) {
            //
            $table->foreign('cause_id')->references('id')->on('causes')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cause_results', function (Blueprint $table) {
            //
        });
    }
}
