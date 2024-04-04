<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAeps extends Migration
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
            $table->string('latitude');
            $table->string('longitude');
            $table->string('mobilenumber');
            $table->string('referenceno');
            $table->string('ipaddress');
            $table->string('adhaarnumber');
            $table->string('accessmodetype');
            $table->bigInteger('nationalbankidentification');
            $table->text('requestremarks')->nullable();
            $table->text('data');
            $table->string('pipe');
            $table->timestamp('timestamp');
            $table->string('transactiontype');
            $table->string('submerchantid');
            $table->enum('is_iris', ['Yes', 'No']);
            $table->decimal('amount', 10, 2);
            $table->string('MerAuthTxnId')->nullable();
            $table->timestamps(); // adds created_at and updated_at columns
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
