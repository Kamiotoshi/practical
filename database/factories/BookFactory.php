<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title"=> $this->faker->unique()->colorName,
            "ISBN"=> $this->faker->text(25),
            "pub_year" => $this->faker->numberBetween(1900, 2005),
            "available"=>random_int(1,2),
            "authorid"=>random_int(1,10)
        ];
    }
}
