<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Director;
use App\Models\Genre;
use App\Models\Film;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::factory()->count(random_int(2,10))
        ->for(Director::factory())
        ->has(Actor::factory()->count(random_int(3, 5)))
        ->has(Genre::factory()->count(random_int(1, 3)))
        ->create();
    }
}
