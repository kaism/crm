<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('message_id')->unique();
            $table->unsignedBigInteger('from');
            $table->unsignedBigInteger('to');
            $table->string('subject')->default('');
            $table->string('body')->default('');
            $table->timestamps();

            $table->foreign('from')->references('id')->on('email_addresses');
            $table->foreign('to')->references('id')->on('email_addresses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emails');
    }
}
