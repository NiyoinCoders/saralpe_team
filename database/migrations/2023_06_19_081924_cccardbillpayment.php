<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cccardbillpayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ccardbill', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('refid');
            $table->string('name');
            $table->integer('mobile');
            $table->integer('cardno');
            $table->integer('amount');
            $table->string('remark');
            $table->string('network');
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
        //
        Schema::dropIfExists('ccardbill');
    }
}
