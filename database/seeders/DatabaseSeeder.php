<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(DirectorSeeder::class);
        //$this->call(GenreSeeder::class);
        //$this->call(ActorSeeder::class);

        foreach (range(1, 10) as $i) {
            $this->call(FilmSeeder::class);
        }
    }
}
