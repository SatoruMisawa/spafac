<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesToStayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules_to_stay', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('plan_id')->unsigned();
            $table->bigInteger('day_id')->unsigned();
            $table->integer('checkin_from');
            $table->integer('checkin_to');
            $table->integer('checkout');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule_to_stays');
    }
}