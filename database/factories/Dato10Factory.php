<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dato10>
 */
class Dato10Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NOMBRE' => $this->faker->name(),
            'APELLIDOS' => $this->faker->lastName(),
            'CARGO' => $this->faker->jobTitle(),
            'SALARIO' => $this->faker->randomNumber(4),
            'INICIO_DE_LABORES' => $this->faker->date('d/m/Y'),
            'OBJETIVO_DE_GASTO'=>$this->faker->randomNumber(1),
            'ESTATUS'  => $this->faker->randomElement(['PERMANETE', 'TRANSITORIO']),
        ];
    }
}
