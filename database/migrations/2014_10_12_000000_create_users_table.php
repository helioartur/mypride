<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('account_type')->default('normal');
            $table->string('avatar_url')->nullable();
            $table->string('sns_acc_id')->nullable();;
            $table->string('status')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

        /*Schema::table('cause_helpers', function(Blueprint $table){
            $table->integer('user_id')->unsigned()->index()->default(1);
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
        });

        Schema::table('cause_owners', function(Blueprint $table){
            $table->integer('user_id')->unsigned()->index()->default(1);
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
