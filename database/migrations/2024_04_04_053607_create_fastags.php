<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFastags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fastags', function (Blueprint $table) {
            $table->id();
            $table->string('operator');
            $table->integer('canumber');
            $table->string('amount');
            $table->string('referenceid');
            $table->integer('latitude');
            $table->string('longitude');
            $table->integer('bill_fetch');
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
        Schema::dropIfExists('fastags');
    }
}
