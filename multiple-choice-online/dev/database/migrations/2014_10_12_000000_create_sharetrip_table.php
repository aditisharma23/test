<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharetripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sharetrip', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('u_id');
            $table->integer('day_id');
            $table->string('destination');
            $table->longText('summary');
            $table->longText('comment');
            $table->longText('pictures');
            $table->dateTime('date_from');
            $table->dateTime('date_to');
            $table->string('price');
            $table->string('budget');
            $table->string('transpotation');
            $table->string('hotel_name');
            $table->longText('description');
            $table->string('restaurant_name');
            $table->longText('restaurant_description');
            $table->string('hotel_trans');
            $table->longText('hotel_trans_link');
            $table->string('luxury');
            $table->string('adventure');
            $table->string('culture_trade');
            $table->string('food');
            $table->enum('status', ['0', '1','2']);
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
        Schema::dropIfExists('sharetrip');
    }
}
