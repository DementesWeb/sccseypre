<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dato14>
 */
class Dato14Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'APELLIDO'=> $this->faker->lastName(),
            'NOMBRE'=> $this->faker->name(),
            'CEDULA'=> $this->faker->randomNumber(8),
            'CARGO'=> $this->faker->jobTitle(),
            'SALARIO_MENSUAL'=> $this->faker-> randomNumber(4),
            'GASTO_DE_REPRESENTACIO'=> $this->faker->randomNumber(3),
            'TOTAL'=> $this->faker->randomNumber(4),
        ];
    }
}
