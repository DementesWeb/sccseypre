<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dato32>
 */
class Dato32Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NOMBRE'=> $this->faker->name(),
            'APELLIDO'=> $this->faker->lastName(),
            'CEDULA'=> $this->faker->randomNumber(8),
            'TIPO_DE_CONTRATO'=> $this->faker->randomElement(['PERMANENTE', 'EVENTUAL']),
        ];
    }
}
