<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spaces', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('facility_id')->unsigned();
            $table->bigInteger('key_delivery_id')->unsigned();
            $table->string('name');
            $table->string('about');
            $table->integer('capacity');
            $table->integer('floor_area');
            $table->string('about_amenity');
            $table->string('about_food_drink');
            $table->string('about_cleanup');
            $table->string('cancellation_policy');
            $table->string('terms_of_use');
            $table->bigInteger('rent_space_type_id')->unsigned()->nullable();
            $table->integer('numbers_of_beds')->nullable();
            $table->integer('numbers_of_futons')->nullable();
            $table->integer('numbers_of_baths')->nullable();
            $table->integer('numbers_of_toilets')->nullable();
            $table->bigInteger('rent_space_business_type_id')->unsigned()->nullable();
            $table->string('business_license_image_name')->nullable();
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
        Schema::dropIfExists('spaces');
    }
}