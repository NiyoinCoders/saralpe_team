<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRechargeMobile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recharge_mobile', function (Blueprint $table) {
            $table->id();
            $table->string('circlecode');
            $table->integer('operatorcode');
            $table->string('number');
            $table->string('amount');
            $table->integer('orderid');
            $table->string('status');
            $table->integer('txid');
            $table->string('opid');
            $table->integer('merchant_code');
            $table->string('uuid');
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
        Schema::dropIfExists('recharge_mobile');
    }
}
