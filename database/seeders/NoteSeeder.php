<?php

namespace Database\Seeders;

use App\Models\Eleve;
use App\Models\Matiere;
use App\Models\Note;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class NoteSeeder extends Seeder
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
            Note::create([
                'valeur' => $faker->randomFloat(2, 0, 20),
                'date' => $faker->date(),
                'eleve_id' => $eleve->id,
                'matiere_id' => $matiere->id,
            ]);
        }
    }
}
