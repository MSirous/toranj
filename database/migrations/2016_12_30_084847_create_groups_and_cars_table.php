<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsAndCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_group', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('cars' , function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('cgroup_id')->unsigned()->default(0);
            $table->foreign('cgroup_id')->references('id')->on('cars_group')->onDelete('cascade');
            $table->string('gearbox');
            $table->string('state');
            $table->string('phone');
            $table->string('color');
            $table->string('remove_color');
            $table->string('tires');
            $table->string('installment');
            $table->string('datetime');
            $table->string('validity');            
            $table->string('active');
            $table->string('category');
            $table->string('vehicle');
            $table->string('price');
            $table->string('company');
            $table->string('model');
            $table->string('type');
            $table->string('info');
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
        Schema::drop('cars');
        Schema::drop('cars_group');
    }
}
