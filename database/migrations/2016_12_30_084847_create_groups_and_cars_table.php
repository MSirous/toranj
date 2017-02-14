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
            $table->string('company')->nullable();
            $table->string('model')->nullable();
            $table->string('date_birth')->nullable();
            $table->string('price')->nullable();
            $table->string('installment_price')->nullable();
            $table->string('installment')->nullable();
            $table->string('work')->nullable();
            $table->string('gearbox')->nullable();
            $table->string('tires')->nullable();
            $table->string('body')->nullable();
            $table->string('color')->nullable();
            $table->string('remove_color')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->string('vehicle')->nullable();
            $table->string('address')->nullable();
            $table->string('info')->nullable();
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
