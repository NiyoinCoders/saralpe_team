<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditCards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_cards', function (Blueprint $table) {
            $table->id();
            $table->string('refid');
            $table->string('name');
            $table->string('mobile');
            $table->string('card_number');
            $table->integer('amount');
            $table->string('remarks');
            $table->string('network');
            $table->string('payee_name');
            $table->string('status');
            $table->string('ackno');
            $table->string('message');
            $table->string('uuid');
            $table->string('orderid');
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
        Schema::dropIfExists('credit_cards');
    }
}
