<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aeps', function (Blueprint $table) {
            $table->id();
            $table->text('channel_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->text('mobile_no')->nullable();
            $table->text('aadhar_no')->nullable();
            $table->text('bank')->nullable();
            $table->text('ackno')->nullable();
            $table->text('referenceno')->nullable();
            $table->text('bankrrn')->nullable();
            $table->decimal('amount', 8, 2)->nullable();
            $table->decimal('settled_amount', 8, 2)->nullable();
            $table->text('gst_per')->nullable();
            $table->decimal('tax_amount', 8, 2)->nullable();
            $table->text('transaction_type')->nullable();
            $table->text('response_message')->nullable();
            $table->integer('status')->nullable();
            $table->longText('json_response')->nullable();
            $table->longText('status_check_response')->nullable();
            $table->longText('verify_callback')->nullable();
            $table->longText('threeway_res')->nullable();
            $table->integer('threeway_hit_status')->default(0);
            $table->integer('record_type')->nullable();
            $table->tinyInteger('api')->default(1);
            $table->integer('txn_device')->default(1);
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
        Schema::dropIfExists('aeps');
    }
}
