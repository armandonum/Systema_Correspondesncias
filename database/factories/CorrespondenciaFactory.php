<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Correspondencia;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Correspondencia>
 */
class CorrespondenciaFactory extends Factory
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
$factory->define(Correspondencia::class, function (Faker $faker) {
    return [
        'fecha' => $faker->date,
        'remitente' => $faker->name,
        'asunto' => $faker->sentence,
        'cite' => $faker->word,
        'destinatario_id' => \App\Models\Destinatario::inRandomOrder()->first()->id,
    ];
});