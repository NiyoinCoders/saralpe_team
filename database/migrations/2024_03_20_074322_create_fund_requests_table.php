<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_requests', function (Blueprint $table) {
            $table->id();
            $table->text('channel_id')->nullable();
            $table->text('order_id')->nullable();
            $table->bigInteger('bank_id')->nullable();
            $table->text('deposit_date')->nullable();
            $table->text('payment_mode')->nullable();
            $table->decimal('added_amount', 8, 2)->nullable();
            $table->text('gst_per')->nullable();
            $table->decimal('tax_amount', 8, 2)->nullable();
            $table->decimal('amount', 8, 2)->nullable();
            $table->text('receipt_no')->nullable();
            $table->text('remark')->nullable();
            $table->text('image')->nullable();
            $table->integer('status')->nullable()->comment('0=pending,1=approved,2=rejected');
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('fund_requests');
    }
}
