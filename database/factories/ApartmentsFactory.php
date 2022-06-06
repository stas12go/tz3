<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apartments>
 */
class ApartmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $types = [
            'Студия',
            'Однокомнатная квартира',
            'Двухкомнатная квартира'
        ];
        $faker = \Faker\Factory::create('ru_RU');
        return [
            'name' => $faker->word(),
            'type' => $types[rand(0, count($types) - 1)],
            'price' => 50000 * rand(100, 200)
        ];
    }
}
