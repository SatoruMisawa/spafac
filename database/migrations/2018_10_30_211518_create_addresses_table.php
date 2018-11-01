<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prefecture_id');
            $table->string('zip');
            $table->string('address1');
            $table->string('address1_ruby');
            $table->string('address2');
            $table->string('address2_ruby');
            $table->string('address3')->nullable();
            $table->string('address3_ruby')->nullable();
            $table->double('latitude', 8, 6);
            $table->double('longitude', 9, 6);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
