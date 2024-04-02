<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('complaint_id');
            $table->string('subject')->nullable();
            $table->string('email')->nullable();
            $table->string('product_type')->nullable();
            $table->string('issue_type')->nullable();
            $table->longText('description')->nullable();
            $table->string('file');
            $table->string('ticket_type');
            $table->string('support_issue')->nullable();   
            $table->longText('request_logs')->nullable();
            $table->longText('response_logs')->nullable();
            $table->longText('remark')->nullable();
            $table->integer('mobile')->nullable();
            $table->bigInteger('status')->default('0')->comment('0 open, 1 pending,2 completed')->nullable();
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
        Schema::dropIfExists('tickets');
    }
}
