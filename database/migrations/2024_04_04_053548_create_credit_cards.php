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
            $table->integer('name');
            $table->string('mobile');
            $table->string('card_number');
            $table->integer('amount');
            $table->string('remarks');
            $table->integer('network');
            $table->string('payee_name');
            $table->integer('status');
            $table->integer('ackno');
            $table->integer('message');
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
        Schema::dropIfExists('credit_cards');
    }
}
