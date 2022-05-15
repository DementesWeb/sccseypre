<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dato4>
 */
class Dato4Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'CEDULA'=>$this->faker->randomNumber(8),
            'P_NOMBRE'=>$this->faker->name(),
            'S_NOMBRE'=>$this->faker->name(),
            'PATERNO'=>$this->faker->name(),
            'MATERNO'=>$this->faker->name(),
            'CASADA'=>$this->faker->name(),
            'SEXO'=>$this->faker->randomLetter('M'|'F'),
            'TEELFONO'=>$this->faker->phoneNumber(8),
            'FECHA_NACIMIENTO'=>$this->faker->date('d/m/Y'),
        ];
    }
}
