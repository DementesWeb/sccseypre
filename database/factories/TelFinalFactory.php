<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TelFinal>
 */
class TelFinalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'CED'=>$this->faker->randomNumber(8),
            'PRIMER_NOMBRE'=>$this->faker->firstName(),
            'SEGUNDO_NOMBRE'=>$this->faker->firstName(),
            'APELLIDO_PATERNO'=>$this->faker->lastName(),
            'APELLIDO_MATERNO'=>$this->faker->lastName(),
            'APELLIDO_CASADA'=>$this->faker->lastName(),
            'TEL1'=>$this->faker->phoneNumber(),
            'TEL2'=>$this->faker->phoneNumber(),
            'TEL3'=>$this->faker->phoneNumber(),
            'TEL4'=>$this->faker->phoneNumber(),
            'TEL5'=>$this->faker->phoneNumber(),
            'TEL6'=>$this->faker->phoneNumber(),
            'TEL7'=>$this->faker->phoneNumber(),
            'TEL8'=>$this->faker->phoneNumber(),
            'TEL9'=>$this->faker->phoneNumber(),
            'TEL10'=>$this->faker->phoneNumber(),
            'TEL11'=>$this->faker->phoneNumber(),
            'TEL12'=>$this->faker->phoneNumber(),
            'TEL13'=>$this->faker->phoneNumber(),
            'TEL14'=>$this->faker->phoneNumber(),
            'TEL15'=>$this->faker->phoneNumber(),
        ];
    }
}
