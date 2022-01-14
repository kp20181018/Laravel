<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->city(),
            "postal_code" => $this->faker->unique()->postcode(),
            "population" => $this->faker->numberBetween(2000, 1000000)
        ];
    }
}
