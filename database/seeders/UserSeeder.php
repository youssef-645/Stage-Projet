<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {

        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            User::create([
                'username' => $faker->firstName,
                'nom' => $faker->firstName,
                'prenom' => $faker->firstName,
                'password' => Hash::make($faker->password),
                'email' => $faker->unique()->safeEmail,
                'avatar' => $faker->imageUrl(),
                'telephone' => $faker->phoneNumber,
            ]);
        }
        User::create([
            'username' => $faker->firstName,
            'nom' => $faker->firstName,
            'prenom' => $faker->firstName,
            'password' => Hash::make("admin"),
            'email' => $faker->unique()->safeEmail,
            'avatar' => $faker->imageUrl(),
            'telephone' => $faker->phoneNumber,
            'role' => "admin",
        ]);
    }
}
