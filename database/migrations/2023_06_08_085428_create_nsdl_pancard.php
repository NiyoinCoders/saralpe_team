<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNsdlPancard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsdl_pan', function (Blueprint $table) {
            $table->id();
            $table->string('refid');
            $table->string('title');
            $table->integer('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('mode');
            $table->string('gender');
            $table->string('redirect_url');
            $table->string('email');
            $table->text('json_response');
            $table->integer('balance');
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
        Schema::dropIfExists('nsdl_pan');
    }
}
