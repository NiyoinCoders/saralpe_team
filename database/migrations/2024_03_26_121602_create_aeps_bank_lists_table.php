<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAepsBankListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aeps_bank_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bid')->nullable();
            $table->text('bankName')->nullable();
            $table->text('iinno')->nullable();
            $table->text('logo')->nullable();
            $table->integer('activeFlag')->nullable();
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
        Schema::dropIfExists('aeps_bank_lists');
    }
}
