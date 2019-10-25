<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $users = [
            [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => \Illuminate\Support\Facades\Hash::make('secret'),
                'reward_start' => 15000,
                'reward_end' => 25000
            ],
            [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => \Illuminate\Support\Facades\Hash::make('secret'),
                'reward_start' => 10000,
                'reward_end' => 40000
            ],
            [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => \Illuminate\Support\Facades\Hash::make('secret'),
                'reward_start' => 24000,
                'reward_end' => 70000
            ],
            [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => \Illuminate\Support\Facades\Hash::make('secret'),
                'reward_start' => 60000,
                'reward_end' => 80000
            ],
            [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => \Illuminate\Support\Facades\Hash::make('secret'),
                'reward_start' => 25000,
                'reward_end' => 30000
            ],
            [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => \Illuminate\Support\Facades\Hash::make('secret'),
                'reward_start' => 75000,
                'reward_end' => 80000
            ],
            [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => \Illuminate\Support\Facades\Hash::make('secret'),
                'reward_start' => 35000,
                'reward_end' => 45000
            ],
            [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => \Illuminate\Support\Facades\Hash::make('secret'),
                'reward_start' => 15000,
                'reward_end' => 20000
            ]
        ];

        foreach ($users as $user) {
            \App\User::create($user);
        }
    }
}
