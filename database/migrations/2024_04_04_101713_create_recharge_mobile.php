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
            $table->string('operator_service');
            $table->string('circlecode');
            $table->string('operatorcode');
            $table->string('number');
            $table->string('amount');
            $table->string('orderid');
            $table->string('status');
            $table->string('txid');
            $table->string('opid');
            $table->string('merchant_code');
            $table->string('uuid');
            $table->string('cummison');
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
