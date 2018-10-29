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
            $table->string('nickname');
            $table->string('password');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('tel')->unique();
            $table->string('zip');
            $table->integer('prefecture_id')->unsigned()->nullable();
            $table->string('address1');
            $table->string('address2');
            $table->string('address3');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
