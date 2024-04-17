<?php

namespace Database\Seeders;

use App\Models\Eleve;
use App\Models\Groupe;
use App\Models\Parente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Log;

class EleveSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            $groupe = Groupe::inRandomOrder()->first();

            $eleve = Eleve::create([
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName,
                'date_naissance' => $faker->date(),
                'adresse' => $faker->address,
                'email' => $faker->unique()->safeEmail,
                'groupe_id' => $groupe->id,
            ]);

            $parentes = Parente::inRandomOrder()->limit(2)->get();
            $parentes->each(function ($parente) use ($eleve) {
                $eleve->parentes()->attach($parente->id);
            });
        }
    }
}
