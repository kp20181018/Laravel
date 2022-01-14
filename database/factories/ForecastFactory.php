<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ForecastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'min' => $this->faker->numberBetween(-13, 10),
            'max' => $this->faker->numberBetween(-9, 0),
            'date' => $this->faker->unique->date('Y-m-d', '+ 15 days'),
            'weather_id' => $this->faker->numberBetween(1, 6),
            'city_id' => $this->faker->numberBetween(1, 20),
            'wind_speed' => $this->faker->numberBetween(0, 10)
        ];
    }
}
