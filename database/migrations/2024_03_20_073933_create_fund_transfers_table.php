<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_transfers', function (Blueprint $table) {
            $table->id();
            $table->text('channel_id')->nullable();
            $table->text('to_user_id');
            $table->text('from_user_id');
            $table->decimal('amount', 8, 2)->nullable();
            $table->enum('type', ['C', 'D'])->nullable();
            $table->text('txn_id')->nullable();
            $table->integer('status')->nullable();
            $table->string('remark', 300)->nullable();
            $table->string('rcv_before_bal', 20)->nullable();
            $table->string('rcv_updated_bal', 20)->nullable();
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
        Schema::dropIfExists('fund_transfers');
    }
}
