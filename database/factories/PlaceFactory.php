<?php

namespace LambdaDigamma\MMPlaces\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LambdaDigamma\MMPlaces\Models\Place;

class PlaceFactory extends Factory
{
    protected $model = Place::class;

    public function definition()
    {
        return [
            'name' => $this->faker->words(2, true),
            'country_code' => 'DE',
        ];
    }
}
