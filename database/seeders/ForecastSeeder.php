<?php

namespace Database\Seeders;

use App\Models\Forecast;
use Illuminate\Database\Seeder;

class ForecastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Forecast::factory(40)->create();
    }
}
