<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBbpsPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bbps_payments', function (Blueprint $table) {
            $table->id();
            $table->text('channel_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->text('category')->nullable();
            $table->unsignedBigInteger('operator_id')->nullable();
            $table->text('ca_number')->nullable();
            $table->decimal('amount', 8, 2)->nullable();
            $table->text('mode')->nullable();
            $table->text('reference_id')->nullable();
            $table->text('ackno')->nullable();
            $table->text('response_message')->nullable();
            $table->integer('status')->nullable()->comment('0=refunded,1=success,2=pending');
            $table->longText('json_response')->nullable();
            $table->integer('refunded')->nullable()->comment('1=yes');
            $table->text('refundtxnid')->nullable();
            $table->longText('status_check_response')->nullable()->comment('1=yes,2=refunded');
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
        Schema::dropIfExists('bbps_payments');
    }
}
