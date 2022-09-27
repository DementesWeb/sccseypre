<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dato16>
 */
class Dato16Factory extends Factory
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
            'CEDULA'=> $this->faker->randomNumber(8),
            'CARGO'=> $this->faker->jobTitle(),
            'UNIDAD'=> $this->faker->bs(),
            'FECHA_INICIO'=> $this->faker->date('d/m/Y'),
            'SALARIO'=> $this->faker->randomNumber(4),
            'SUB_SUELDO'=> $this->faker->randomNumber(3),
            'GASTO_REPRESENTACION'=> $this->faker->randomNumber(2),
            'TOTAL'=> $this->faker->randomNumber(4),
            'CODGAST'=> $this->faker->id(),
            'ESTADO'=> $this->faker->randomElement(['PERMANENTE', 'EVENTUAL']),
        ];
    }
}
