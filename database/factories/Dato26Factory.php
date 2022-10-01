<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dato26>
 */
class Dato26Factory extends Factory
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
            'FUNCIONARIO'=> $this->faker->name(),
            'FECHA_NACIMIENTO'=> $this->faker->date('d/m/Y'),
            'FECHA_INGRESO'=> $this->faker->date('d/m/Y'),
            'CARGO_FUNCION'=> $this->faker->jobTitle(),
            'SALARIO'=> $this->faker->randomNumber(4),
            'GASTO_DE_REP'=> $this->faker->randomNumber(2),
            'SOBRE_SUELDO_ANTIGUEDAD'=> $this->faker->randomNumber(3),
            'SOBRE_SUELDO_JEFATURA'=> $this->faker->randomNumber(2),
            'TIPO_CONTRATACION'=> $this->faker->randomElement(['PERMANENTE', 'EVENTUAL']),
            'SEDE'=> $this->faker->company(),
            'DEPARTAMENTO'=> $this->faker->city(),
        ];
    }
}
