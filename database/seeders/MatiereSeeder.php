<?php

namespace Database\Seeders;

use App\Models\Classe;
use App\Models\Enseignant;
use App\Models\Groupe;
use App\Models\Matiere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Récupérer tous les enseignants, groupes et classes existants
        $enseignants = Enseignant::all();
        $groupes = Groupe::all();
        $classes = Classe::all();

        for ($i = 0; $i < 50; $i++) {
            $matiere = Matiere::create([
                'nom' => $faker->word,
            ]);

            $matiere->enseignantes()->attach($enseignants->random(rand(1, 5))->pluck('id'));
            $matiere->groupes()->attach($groupes->random(rand(1, 3))->pluck('id'));
            $matiere->classes()->attach($classes->random(rand(1, 3))->pluck('id'));
        }
    }
}
