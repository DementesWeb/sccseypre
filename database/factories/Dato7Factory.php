<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dato7>
 */
class Dato7Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'cedula' => $this->faker->ssn(),
            'nombre' => $this->faker->name(),
            'empresa_1' => $this->faker->company(),
            'empresa_2' => $this->faker->company(),
            'numero_1' => $this->faker->randomNumber(4),
            'numero_2' => $this->faker->randomNumber(4),
            'salario_neto' => $this->faker->randomNumber(6),
        ];
    }
}
