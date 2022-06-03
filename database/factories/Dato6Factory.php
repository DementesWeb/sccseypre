<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dato6>
 */
class Dato6Factory extends Factory
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
            'NOMBRE'=>$this->faker->name(),
            'BARRIADA'=>$this->faker->streetName(),
            'CALLE'=>$this->faker->streetAddress(),
            'CASA'=>$this->faker->streetAddress(),
            'TELEFONO'=>$this->faker->phoneNumber(),
        ];
    }
}
