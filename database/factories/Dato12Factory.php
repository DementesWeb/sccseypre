<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dato12>
 */
class Dato12Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'CEDULA'=> $this->faker->randomNumber(8),
            'NOMBRE'=> $this->faker->name(),
            'FECHA_DE_INGRESO'=> $this->faker->date('d/m/Y'),
            'POSICION'=> $this->faker->jobTitle(),
            'SALARIO'=> $this->faker->randomNumber(4),
            'GASTOS'=> $this->faker->randomNumber(4),
            'TOTAL'=> $this->faker->randomNumber(5),
            'EMPLEADO'=> $this->faker->randomElement(['PERMANENTE', 'TRANSITORIO']),
        ];
    }
}
