<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rechargemobile extends Migration
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
            $table->string('operatorid');
            $table->integer('response_code');
            $table->string('ackno');
            $table->integer('refid');
            $table->string('message');
            $table->integer('mobile');
            // Add more columns as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recharge_mobile');
    }
}
