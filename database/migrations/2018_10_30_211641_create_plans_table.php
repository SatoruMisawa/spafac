<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('space_id')->unsigned();
            $table->bigInteger('preorder_deadline_id')->unsigned();
            $table->bigInteger('preorder_period_id')->unsigned();
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('price_per_hour')->unsigned()->nullable();
            $table->integer('price_per_day')->unsigned()->nullable();
            $table->boolean('need_to_be_approved')->default(false);
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            $table->integer('max_expected_number_of_people')->unsigned()->nullable();
            $table->integer('excess_charge_per_person')->unsigned()->nullable();
            $table->integer('min_number_of_nights')->nullable();
            $table->integer('max_number_of_nights')->nullable();
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
        Schema::dropIfExists('plans');
    }
}