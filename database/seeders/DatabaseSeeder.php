<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ClasseSeeder::class,
            GroupeSeeder::class,
            MatiereSeeder::class,
            EnseignantSeeder::class,
            ParenteSeeder::class,
            EleveSeeder::class,
            NoteSeeder::class,
        ]);
    }
}
