<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDialogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dialogs', function (Blueprint $table) {
            $table->bigIncrements('dialog_id');
            $table->unsignedBigInteger('user1_id');
            $table->unsignedBigInteger('user2_id');
            $table->timestamps();

            $table->foreign('user1_id')->references('id')->on('users');
            $table->foreign('user2_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dialogs');
    }
}
