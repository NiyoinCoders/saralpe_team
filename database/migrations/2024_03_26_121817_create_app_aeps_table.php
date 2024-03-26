<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppAepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_aeps', function (Blueprint $table) {
            $table->id();
            $table->text('token')->nullable();
            $table->text('channel_id')->nullable();
            $table->text('pid')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->text('mobile_no')->nullable();
            $table->text('adhaar_no')->nullable();
            $table->text('bank')->nullable();
            $table->text('remark')->nullable();
            $table->text('amount')->nullable();
            $table->text('transactiontype')->nullable();
            $table->text('device')->nullable();
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
        Schema::dropIfExists('app_aeps');
    }
}
