<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;
use App\Models\Person;

class PersonFactory extends Factory
{

    protected $model = Person::class;
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
            'document_number' => $faker->randomNumber(8),
            'email' => $faker->unique()->safeEmail,
            'birth_date' => $faker->date(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
