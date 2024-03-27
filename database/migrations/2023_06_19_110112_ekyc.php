<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ekyc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ekyc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('firmname');
            $table->integer('pannumber');
            $table->integer('pincode');
            $table->date('dob');
            $table->unsignedInteger('stateid');
            $table->string('pan_image');
            $table->string('voter_front');
            $table->string('voter_back');
            $table->string('driving_front');
            $table->string('driving_back');
            $table->string('shopaddress');
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
        //
        Schema::dropIfExists('ekyc');

    }
}
