<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dato3>
 */
class Dato3Factory extends Factory
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
            'PRIMER_NOMBRE'=>$this->faker->name(),
            'SEGUNDO_NOMBRE'=>$this->faker->name(),
            'APELLIDO_PATERNO'=>$this->faker->name(),
            'APELLIDO_MATERNO'=>$this->faker->name(8),
            'APELLIDO_CASADA'=>$this->faker->name(8),
            'FECHA_NACIMIENTO'=>$this->faker->date('d/m/Y'),
            'SEXO'=>$this->faker->randomLetter('M','F'),
            'EDAD'=>$this->faker->randomNumber(2),
            'TELEFONO_RES'=>$this->faker->phoneNumber(8),
        ];
    }
}
