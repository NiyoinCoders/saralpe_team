<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commissions', function (Blueprint $table) {
            $table->id();
            $table->string('channel_id', 25)->nullable();
            $table->integer('user_type')->nullable();
            $table->integer('new_user_type');
            $table->integer('service_id')->nullable();
            $table->enum('commission_type', ['1', '2'])->nullable()->comment('1=by amount, 2=percentage');
            $table->text('for_specific_user')->comment('specific user id');
            $table->decimal('from_amount', 8, 2)->nullable();
            $table->decimal('to_amount', 8, 2)->nullable();
            $table->decimal('percentage', 8, 2)->nullable();
            $table->decimal('commission_amt', 8, 2)->nullable();
            $table->longText('charges')->nullable();
            $table->text('operator_id')->nullable()->comment('if service type is mr');
            $table->integer('plan_id')->nullable();
            $table->enum('chain_type', ['Self', 'Chain'])->nullable();
            $table->char('type', 1)->nullable()->comment('C=credit, D= debit');
            $table->string('transaction_type')->nullable();
            $table->string('username')->nullable();
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
        Schema::dropIfExists('commissions');
    }
}
