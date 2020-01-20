<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellerUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone');
            $table->string('role');
            $table->string('sfile')->default('male.png');
            $table->string('shopname');
            $table->string('address');
            $table->string('town');
            $table->string('country');
            $table->string('tin');
            $table->string('companyname');
            $table->string('acctname');
            $table->string('acctnumber');
            $table->string('bankname');
            $table->string('brn');
            $table->rememberToken();
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
        Schema::dropIfExists('seller_users');
    }
}
