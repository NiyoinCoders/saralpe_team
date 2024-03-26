<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyBanks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_banks', function (Blueprint $table) {
            $table->id();
            $table->string('bank_name');
            $table->string('holder_name');
            $table->string('acc_no');
            $table->string('ifsc_code');
            $table->string('branch_add');
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
        Schema::dropIfExists('company_banks');
    }
}
