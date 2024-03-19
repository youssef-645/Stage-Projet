<?php

namespace Database\Seeders;

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

        for ($i = 0; $i < 50; $i++) {
            Note::create([
                'valeur' => $faker->randomFloat(2, 0, 20),
                'date' => $faker->date(),
                'eleve_id' => $faker->numberBetween(1, 50),
                'matiere_id' => $faker->numberBetween(1, 50),
            ]);
        }
    }
}
