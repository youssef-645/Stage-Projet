<?php

namespace Database\Seeders;

use App\Models\Eleve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Eleve::create([
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName,
                'date_naissance' => $faker->date(),
                'adresse' => $faker->address,
                'email' => $faker->unique()->safeEmail,
                'groupe_id' => $faker->numberBetween(1, 10),
                'parente_id' => $faker->numberBetween(1, 20),
            ]);
        }
    }
}
