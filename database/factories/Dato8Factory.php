<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dato8>
 */
class Dato8Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'CEDULA'=>$this->faker->randomNumber(8),
            'NOMBRE'=>$this->faker->name(),
            'LUGAR_DE_TRABAJO'=>$this->faker->company(),
            'SALARIO'=>$this->faker->randomNumber(4),
        ];
    }
}
