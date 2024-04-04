<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillpayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billpayments', function (Blueprint $table) {
            $table->id();
            $table->string('operator');
            $table->integer('canumber');
            $table->string('amount');
            $table->string('referenceid');
            $table->integer('latitude');
            $table->string('longitude');
            $table->integer('mode');
            $table->string('bill_fetch');
            $table->integer('status');
            $table->string('operatorid');
            $table->integer('ackno');
            $table->integer('message');
            $table->integer('merchant_code');
            $table->string('uuid');
            $table->integer('orderid');
            $table->integer('cummison');
            $table->string('ballance');
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
        Schema::dropIfExists('billpayments');
    }
}
