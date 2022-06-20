<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Director;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->text,
            'release_date' => $this->faker->dateTimeBetween('-60 years', '-18 years'),
            'duration' => $this->faker->numberBetween(60, 300),
            'rating' => $this->faker->numberBetween(1, 5),
            'budget' => $this->faker->numberBetween(1, 1000000),
            //'director_id' => $this->faker->randomElement(Director::all()->pluck('id')->toArray()),
        ];
    }
}
