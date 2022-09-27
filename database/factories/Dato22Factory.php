<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dato22>
 */
class Dato22Factory extends Factory
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
            'SALARIO'=> $this->faker->randomNumber(8),
            'DIRECCION_LABORAL'=> $this->faker->address(),
            'FECHA_DE_NOMBRAMIENTO'=> $this->faker->date('d/m/Y'),
            'CONDICION_LABORAL'=> $this->faker->randomElement(['PERMANENTE', 'EVENTUAL']),
        ];
    }
}
