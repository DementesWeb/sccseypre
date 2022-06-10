<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dato9>
 */
class Dato9Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NOMBRE' => $this->faker->name(),
            'PROVINCIA' => $this->faker->country(),
            'DISTRITO' => $this->faker->cityPrefix(),
            'CORREGIMIENTO' => $this->faker->state(),
            'BARRIO' => $this->faker->streetAddress(),
            'DIRECCION' => $this->faker->streetAddress(),
            'TELEFONO FIJO' => $this->faker->phoneNumber(8),
            'CORREO' => $this->faker->email(),
            'ACTI_COMERCIAL' => $this->faker->paragraph(1),
            'TIPO DOC' => $this->faker->randomElement(['CED', 'INDENTIDAD', 'REGCIVIL', 'NIT', 'EXTRANJERIA']),
            'CEDULA' => $this->faker->randomNumber(8),
            'SECTOR' => $this->faker->streetSuffix(),
            'CALLE' => $this->faker->streetName(),
            'NRO_CASA' => $this->faker->streetAddress(),
            'CONDOMINIO' => $this->faker->streetAddress(),
            'EDIFICIO' => $this->faker->company(),
            'PISO' => $this->faker->randomNumber(2),
            'APTO' => $this->faker->randomNumber(3)
        ];
    }
}
