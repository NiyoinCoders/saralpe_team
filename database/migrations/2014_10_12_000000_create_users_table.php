<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('dbr_id')->nullable();
            $table->string('sdbr_id')->nullable();
            $table->string('emp_id')->nullable();
            $table->string('rm_id')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->unsignedBigInteger("role");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string("firm_name")->nullable();
            $table->string("user_balance")->nullable();
            $table->string("profile")->nullable();
            $table->string("transaction_password")->nullable();
            $table->string("mobile")->nullable();
            $table->string("kyc_remark")->nullable();
            $table->bigInteger("kyc_status")->comment('0 none,1 approevd,2 pending,3 ejected')->nullable();
            $table->string("father_name")->nullable();
            $table->date("dob")->nullable();
            $table->string("gender")->nullable();
            $table->string("pan")->nullable();
            $table->string("aadhar")->nullable();
            $table->string("gst")->nullable();
            $table->string("address")->nullable();
            $table->string("city")->nullable();
            $table->string("state")->nullable();
            $table->string("pincode")->nullable();
            $table->string("user_id")->nullable();
            $table->bigInteger("onboarding_status")->comment('0 pending,1 approved,2 pending')->nullable();
            $table->integer('status')->default(1);
            $table->string('pan_image')->nullable();
            $table->string('voter_front')->nullable();
            $table->string('voter_back')->nullable();
            $table->string('driving_front')->nullable();
            $table->string('driving_back')->nullable();
            $table->string('shopaddress')->nullable();

            $table->datetime("updated_by")->nullable();
            $table->datetime("created_by")->nullable();
            $table->rememberToken();
            $table->timestamps();
            // $table->foreign('role')->references('id')->on('roles')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
