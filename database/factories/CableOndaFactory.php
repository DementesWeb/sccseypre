<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CableOnda>
 */
class CableOndaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cedula'=>$this->faker->randomNumber(8),
            'nombre'=>$this->faker->name(),
            'telefono_casa'=>$this->faker->randomNumber(8),
            'telefono_oficina'=>$this->faker->streetAddress(),
            'celular'=>$this->faker->phoneNumber(8),
            'fax'=>$this->faker->phoneNumber(8),
            'email'=>$this->faker->email(),
            'direccion_postal'=>$this->faker->randomNumber(6),
            'direccion'=>$this->faker->streetAddress(),
            'telefono_residencia_cable'=>$this->faker->phoneNumber(8),
            'telefono_oficina_cable'=>$this->faker->phoneNumber(8),
            'telefono_celular_cable'=>$this->faker->phoneNumber(8),
            'direccion_postal_cable'=>$this->faker->randomNumber(6),
            'fax_cable'=>$this->faker->phoneNumber(9),
            'direccion_fisica'=>$this->faker->streetAddress(),
            'telefono_contacto'=>$this->faker->phoneNumber(8),
        ];
    }
}
