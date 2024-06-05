<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Destinatario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destinatario>
 */
class DestinatarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }
}

$factory->define(Destinatario::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'cargo' => $faker->jobTitle,
    ];
});


