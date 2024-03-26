<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDmtBankListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dmt_bank_lists', function (Blueprint $table) {
            $table->id();
            $table->string('bank_id', 100);
            $table->text('bank_name');
            $table->text('ifsc');
            $table->integer('pennydrop');
            $table->integer('type')->comment('0-NEFT, 1-NEFT and IMPS both');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('dmt_bank_lists');
    }
}
