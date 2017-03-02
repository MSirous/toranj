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
        DB::table('users')->truncate();
        $users = [];
        for($i = 1; $i <= 3; $i++)
        {
            $users[] =
            [
                'name'=> "User {$i}",
                'email'=> "user{$i}@mail.com",
                'password'=> bcrypt("user{$i}")
            ];
        }

        DB::table('users')->insert($users);



        DB::table('cars')->truncate();

        $faker = Faker::create();
        $cars = [];
        foreach (range(1, 50) as $index)
        {
        	$cars[] = [
        		'gearbox' => $faker->Company,
                'state' => $faker->state,
        		'phone' => $faker->date,
        		'color' => rand(1,4),
        		'remove_color' => $faker->randomNumber,
        		'tires' => $faker->boolean,
                'installment' => $faker->boolean('10','20','30'),
                'datetime' => $faker->boolean('yes','NO'),
                'validity' => $faker->randomNumber,
                'active' => rand(1,6),
        		'user_id' => rand(1,3),
                'category' => $faker->name,
                'vehicle' => $faker->name,
        		'category' => $faker->name,
        		'price' => $faker->randomNumber,
        		'company' => $faker->state,
        		'model' => $faker->PhoneNumber,
        		'type' => $faker->realText,
        		//'address' => "{$faker->streetName} {$faker->postCode} {$faker->city} ",
                'info' => $faker->realText,
                'cgroup_id' => rand(1, 3),
        		'created_at' => new DateTime,
        		'updated_at' => new DateTime,

        	];
        }

        DB::table('cars')->insert($cars);
    }
}
