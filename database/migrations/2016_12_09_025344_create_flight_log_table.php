<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('flight_no');
            $table->date('date');
            $table->time('std');
            $table->time('sta');
            $table->string('from');
            $table->string('to');
            $table->string('via'); // divide by ; if there are more than 1 stops 不作检索查询
            $table->string('seat');
            $table->string('class');
            $table->integer('bn');
            $table->time('atd');
            $table->time('ata');
            $table->string('reg');
            $table->string('departure_runway');
            $table->string('arrival_runway');
            $table->string('boarding_pass');
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
        Schema::drop('flight_logs');
    }
}
