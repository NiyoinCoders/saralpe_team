<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllBillPayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_bill_pay', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->bigInteger('refid');
            $table->integer("response_code")->nullable();
            $table->bigInteger("ackno")->nullable();
            $table->string("operatorid")->nullable();
            $table->string("message")->nullable();
            $table->string("canumber")->nullable();
            $table->string("amount")->nullable();
            $table->bigInteger("latitude")->nullable();
            $table->string("longitude")->nullable();
            $table->string("mode")->nullable();
            $table->string("billAmount")->nullable();
            $table->string("billnetamount")->nullable();
            $table->string("billdate")->nullable();
            $table->string("dueDate")->nullable();
            $table->string("acceptPayment")->nullable();
            $table->string("acceptPartPay")->nullable();
            $table->string("cellNumber")->nullable();
            $table->string("userName")->nullable();
            $table->string("url_Json")->nullable();
            $table->datetime("updated_by")->nullable();
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
        //
    }
}
