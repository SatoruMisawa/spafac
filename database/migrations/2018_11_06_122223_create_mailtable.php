<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailtable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mailtable', function (Blueprint $table) {
            $table->increments('mail_id')->comment('メッセージID');
            $table->bigInteger('thread_id')->comment('会話ID');
            $table->string('content')->comment('内容');
            $table->bigInteger('to_user_id')->comment('送信先ユーザID');
            $table->bigInteger('from_user_id')->comment('送信元ユーザID');
            $table->date('send_date')->comment('送信日');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('mailtable');
    }
}
