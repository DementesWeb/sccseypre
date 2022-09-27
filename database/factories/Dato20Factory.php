<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dato20>
 */
class Dato20Factory extends Factory
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
            'CARGO'=> $this->faker->jobTitle(),
            'SALARIO_MENSUAL'=> $this->faker->randomNumber(4),
            'FECHA_DE_INICIO'=> $this->faker->date('d/m/Y'),
            'ESTADO'=> $this->faker->randomElement(['PERMANENTE', 'EVENTUAL']),
        ];
    }
}
