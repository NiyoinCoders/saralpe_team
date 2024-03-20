<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commission_logs', function (Blueprint $table) {
            $table->id();
            $table->text('channel_id')->nullable();
            $table->bigInteger('tid')->nullable();
            $table->integer('service_type')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('transaction_type')->nullable()->comment('0=debit,1=credit');
            $table->text('transaction_value')->nullable();
            $table->decimal('earned_amount', 8, 2)->nullable();
            $table->decimal('tds', 8, 2)->nullable();
            $table->integer('commission_type')->nullable()->comment('1=by amt, 2=percentage');
            $table->string('commission_type_value', 20)->nullable();
            $table->longText('charges')->nullable();
            $table->integer('status')->default(1);
            $table->integer('refunded')->default(0);
            $table->text('type')->nullable();
            $table->text('msg')->nullable();
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
        Schema::dropIfExists('commission_logs');
    }
}
