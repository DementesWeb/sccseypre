<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dato11>
 */
class Dato11Factory extends Factory
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
            'ESTATUS'  => $this->faker->randomElement(['PERMANENTE', 'TRANSITORIO']),
        ];
    }
}
