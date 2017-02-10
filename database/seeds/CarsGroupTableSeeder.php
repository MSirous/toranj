<?php

use Illuminate\Database\Seeder;

class CarsGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('cars_group')->truncate();

        $cars_group=[
        	['id'=>1, 'name'=>'Heavy, Medium and Cargo', 'created_at'=> new DateTime, 'updated_at'=> new DateTime],
        	['id'=>2, 'name'=>'trailer', 'created_at'=> new DateTime, 'updated_at'=> new DateTime],
        	['id'=>3, 'name'=>'Trucks Room', 'created_at'=> new DateTime, 'updated_at'=> new DateTime],
        ];

        DB::table('cars_group')->insert($cars_group);
    }
}
