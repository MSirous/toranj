<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cars')->truncate();

        $faker = Faker::create();
        $cars = [];
        foreach (range(1, 50) as $index)
        {
        	$cars[] = [
        		'company' => $faker->Company,
                'model' => $faker->name,
        		'date_birth' => $faker->date,
        		'price' => rand(1,4),
        		'work' => $faker->randomNumber,
        		'gearbox' => $faker->boolean,
                'tires' => $faker->boolean('10','20','30'),
                'remove_color' => $faker->boolean('yes','NO'),
                'installment' => $faker->randomNumber,
        		'installment_price' => rand(1,6),
                'body' => $faker->name,
                'city' => $faker->name,
        		'vehicle' => $faker->name,
        		'color' => $faker->colorName,
        		'state' => $faker->state,
        		'phone' => $faker->PhoneNumber,
        		'info' => $faker->realText,
        		'address' => "{$faker->streetName} {$faker->postCode} {$faker->city} ",
                'cgroup_id' => rand(1, 3),
        		'created_at' => new DateTime,
        		'updated_at' => new DateTime,

        	];
        }

        DB::table('cars')->insert($cars);
    }
}
