<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBbpsOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bbps_operators', function (Blueprint $table) {
            $table->id();
            $table->integer('operator_id')->nullable();
            $table->text('operator_name')->nullable();
            $table->text('category')->nullable();
            $table->integer('view_bill')->nullable();
            $table->text('regex')->nullable();
            $table->text('display_name')->nullable();
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
        Schema::dropIfExists('bbps_operators');
    }
}
