<?php

namespace Database\Seeders;

use App\Models\Director;
use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Director::factory()->has(Film::factory()->count(2))->count(20)->create();
    }
}
