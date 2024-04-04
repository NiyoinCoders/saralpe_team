<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersBankDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_bank_details', function (Blueprint $table) {
            $table->id();
            $table->string("merchant_code")->nullable();
            $table->string("bankid")->nullable();
            $table->string("account")->nullable();
            $table->string("ifsc")->nullable();
            $table->string("name")->nullable();
            $table->bigInteger("account_type")->comment('PRIMARY,RELATIVE')->nullable();
            $table->string("bene_id")->nullable();
            $table->string("acc_status")->nullable();
            $table->string("pan_no")->nullable();
            $table->string("pan_image")->nullable();
            $table->string("aadhar_no")->nullable();
            $table->string("aadhar_front")->nullable();
            $table->string("aadhar_back")->nullable();
            $table->string("passbook")->nullable();
            $table->datetime("verify_by")->nullable();
            $table->datetime("created_by")->nullable();
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
        Schema::dropIfExists('users_bank_details');
    }
}
