<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Location;
use Faker\Factory as FakerFactory;

class LocationFactory extends Factory
{
    protected $model = Location::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = FakerFactory::create();
        return [
            'name' => $faker->name,
            'city' => $faker->city(),
            'state' => $faker->state(),
            'country' => $faker->country(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
