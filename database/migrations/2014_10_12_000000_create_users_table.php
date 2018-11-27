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
            $table->bigInteger('address_id')->unsigned()->nullable();
            $table->string('family_name')->nullable();
            $table->string('family_name_ruby')->nullable();
            $table->string('given_name')->nullable();
            $table->string('given_name_ruby')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('tel')->nullable();
            $table->string('password')->nullable();
            $table->string('profile_image_url')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('dob_day')->nullable();
            $table->string('dob_month')->nullable();
            $table->string('dob_year')->nullable();
            $table->string('email_verification_token')->nullable();
            $table->boolean('has_verified_email')->default(false);
            $table->rememberToken();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
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