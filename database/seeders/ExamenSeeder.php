<?php

namespace Database\Seeders;

use App\Models\Eleve;
use App\Models\Enseignant;
use App\Models\Matiere;
use App\Models\Examen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Examenseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();

        for ($i = 0; $i < 140; $i++) {
            $eleve = Eleve::inRandomOrder()->first();
            $matiere = Matiere::inRandomOrder()->first();
            $enseignant = Enseignant::inRandomOrder()->first();

            Examen::create([
                'note' => $faker->randomFloat(2, 0, 20),
                'eleve_id' => $eleve->id,
                'matiere_id' => $matiere->id,
                'enseignant_id' => $enseignant->id
            ]);
        }
    }
}
