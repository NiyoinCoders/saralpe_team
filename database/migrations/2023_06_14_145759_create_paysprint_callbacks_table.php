<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaysprintCallbacksTable extends Migration
{
    public function up()
    {
        Schema::create('paysprint_callbacks', function (Blueprint $table) {
            $table->id();
            $table->string('callback_status')->nullable();
            $table->string('callback_data')->nullable();
            $table->string('callback_event')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paysprint_callbacks');
    }
}
