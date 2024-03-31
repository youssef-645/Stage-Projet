<?php

namespace Database\Seeders;

use App\Models\Enseignant;
use App\Models\Groupe;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EnseignantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $groups = Groupe::all();

        for ($i = 0; $i < 19; $i++) {
            $enseignant = Enseignant::create([
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName,
                'telephone' => $faker->phoneNumber,
                'address' => $faker->address,
                'date_naissance' => $faker->date(),
                'email' => $faker->unique()->safeEmail,
            ]);

            $enseignant->groupes()->attach($groups->random()->id);

            $enseignant->save();
        }
    }
}
