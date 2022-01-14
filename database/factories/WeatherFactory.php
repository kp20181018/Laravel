<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WeatherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $options = ["sunny", 'cloud', 'rain', 'snow', 'ice', 'fog'];
        return [
            "name" => $options[$this->faker->numberBetween(0, 5)]
        ];
    }
}
