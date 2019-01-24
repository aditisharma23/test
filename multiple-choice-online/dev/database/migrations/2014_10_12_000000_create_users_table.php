<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('name');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('g_id')->nullable();
            $table->string('fb_id')->nullable();
            $table->string('profile')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->dateTime('dob')->nullable();
            $table->string('card_no')->nullable();
            $table->dateTime('exp_date')->nullable();
            $table->string('cvv')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->enum('status', ['0', '1','2'])->nullable();
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('users');
    }
}
