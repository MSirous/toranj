<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
           Schema::create('cars_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('state');
            $table->string('city');
            $table->string('work');
            $table->string('gearbox');
            $table->string('tires');
            $table->string('body');
            $table->string('color');
            $table->string('remove_color');
            $table->string('installment');
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
        //
        Schema::drop('cars_info');

    }
}
