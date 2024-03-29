<?php

namespace Database\Seeders;

use App\Models\Enseignant;
use App\Models\Parente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ParenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 40; $i++) {
            Parente::insert([
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName,
                'telephone' => $faker->phoneNumber,
                'address' => $faker->address,
                'date_naissance' => $faker->date(),
                'email' => $faker->unique()->safeEmail,
            ]);
        }
    }
}
