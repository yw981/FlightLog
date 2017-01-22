<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            //表数据不归这儿管
            $table->increments('id');
            $table->string('iata'); // 3 c
            $table->string('icao'); // 4 c
            $table->string('name');
            $table->string('city');
            $table->unique('iata');
            $table->index('icao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('airports');
    }
}
