<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dato5>
 */
class Dato5Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'CEDULA' => $this->faker->ssn(),
            'NOMBRE' => $this->faker->name(),
            'SEXO' => $this->faker->randomLetter('M'|'F'),
            'SEGSOC' => $this->faker->name(),
            'PROV' => $this->faker->name(),
            'PLANILLA' => $this->faker->randomNumber(2),
            'POSICION' => $this->faker->jobTitle(),
            'SAL_BR' => $this->faker->randomNumber(4),
            'SAL_NETO' => $this->faker->randomNumber(4),
            'DEP' => $this->faker->word(),
            'MINI_DES' => $this->faker->word(),
            'MINI' => $this->faker->word(),
            'DES_1' => $this->faker->randomNumber(3),
            'DES_2' => $this->faker->randomNumber(3),
            'DES_3' => $this->faker->randomNumber(3),
            'DES_4' => $this->faker->randomNumber(3),
            'DES_5' => $this->faker->randomNumber(3),
            'DES_6' => $this->faker->randomNumber(3),
            'DES_7' => $this->faker->randomNumber(3),
            'DES_8' => $this->faker->randomNumber(3),
            'DES_9' => $this->faker->randomNumber(3),
            'DES_10' => $this->faker->randomNumber(3),
            'DES_11' => $this->faker->randomNumber(3),
            'COD_1' => $this->faker->randomNumber(3),
            'COD_2' => $this->faker->randomNumber(3),
            'COD_3' => $this->faker->randomNumber(3),
            'COD_4' => $this->faker->randomNumber(3),
            'COD_5' => $this->faker->randomNumber(3),
            'COD_6' => $this->faker->randomNumber(3),
            'COD_7' => $this->faker->randomNumber(3),
            'COD_8' => $this->faker->randomNumber(3),
            'COD_9' => $this->faker->randomNumber(3),
            'COD_10' => $this->faker->randomNumber(3),
            'COD_11' => $this->faker->randomNumber(3)
        ];
    }
}
