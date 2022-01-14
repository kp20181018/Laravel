<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forecast extends Model
{
    use HasFactory;
    protected $fillable = ['min', 'max', 'date', 'weather_id', 'city_id', 'wind_speed'];
    protected $with = ['weather', 'city'];
    public function weather()
    {
        return $this->belongsTo(Weather::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
