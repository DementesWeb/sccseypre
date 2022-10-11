<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dato34>
 */
class Dato34Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'FUNCIONARIO' =>  $this->faker->name(),
            'NUMERO_EMPLEADO' =>  $this->faker->randomNumber(6),
            'CEDULA' =>  $this->faker->randomNumber(8),
            'UBICACION' =>  $this->faker->address(),
            'FECHA_DE_INGRESO' =>  $this->faker->date('d/m/Y'),
            'OBJETO' =>  $this->faker->randomNumber(1),
            'POSICION' =>  $this->faker->jobTitle(),
            'ESTADO' =>  $this->faker->randomElement(['PERMANENTE', 'EVENTUAL']),
            'SALARIO' =>  $this->faker->randomNumber(4),
        ];
    }
}
