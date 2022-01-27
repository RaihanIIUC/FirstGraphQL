<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker;
use App\Models\User;
class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
            $faker = Faker\Factory::create();
            for ($i = 0; $i <= 100; $i++) {
                $user = User::create([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'password' => bcrypt('secret'),
                ]);
                $user->user_profiles()->create([
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'avatar' => $faker->imageUrl()
                ]);
            }
    }
}