<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivacySesttingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privacy_sestting', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('u_id');
            $table->enum('who_can_see_my_profile', ['0', '1','2']);
            $table->enum('who_can_buy_trips', ['0', '1','2']);
            $table->enum('email_notification', ['0', '1','2']);
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
        Schema::dropIfExists('privacy_sestting');
    }
}
