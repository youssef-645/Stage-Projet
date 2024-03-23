<?php

namespace Database\Seeders;

use App\Models\Eleve;
use App\Models\Groupe;
use App\Models\Parente;
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



        for ($i = 0; $i < 10; $i++) {
            $groupe = Groupe::inRandomOrder()->first();
            $parente = Parente::inRandomOrder()->first();
            Eleve::create([
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName,
                'date_naissance' => $faker->date(),
                'adresse' => $faker->address,
                'email' => $faker->unique()->safeEmail,
                'groupe_id' => $groupe->id,
                'parente_id' => $parente->id,
            ]);
        }
    }
}
