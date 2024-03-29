<?php

namespace Database\Seeders;

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

        for ($i = 0; $i < 50; $i++) {
            Matiere::create([
                'nom' => $faker->word,
            ]);
        }
    }
}
