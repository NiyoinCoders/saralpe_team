<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicPayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_lic_payments', function (Blueprint $table) {
            $table->id();
            $table->string('canumber');
            $table->integer('mode');
            $table->string('amount');
            $table->string('ad1');
            $table->integer('ad2');
            $table->string('referenceid');
            $table->integer('latitude');
            $table->string('longitude');
            $table->integer('bill_fetch');
            $table->string('status');
            $table->integer('operatorid');
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
        Schema::dropIfExists('_lic_payments');
    }
}
