<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TIGO_2021>
 */
class TIGO_2021Factory extends Factory
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
            'NOMBRE_CLIENTE'=>$this->faker->name(),
            'SUSCRIPTOR'=>$this->faker->randomNumber(8),
            'BARRIO'=>$this->faker->streetAddress(),
            'CELULAR'=>$this->faker->phoneNumber(8),
            'TELEFONO'=>$this->faker->phoneNumber(8),
            'EMAIL'=>$this->faker->email(),
            'EMAIL_CABLE'=>$this->faker->companyEmail(),
            'SALDOCORRIENTE'=>$this->faker->randomFloat(2),
            'SALDO30'=>$this->faker->randomFloat(2),
            'SALDO60'=>$this->faker->randomFloat(2),
            'SALDO90'=>$this->faker->randomFloat(2),
            'SALDO90MAS'=>$this->faker->randomFloat(2),
            'ESTADO'=>$this->faker->boolean(),
            'DEUDATOTAL'=>$this->faker->randomFloat(3),
            'FECHA_ACTUALIZACION'=>$this->faker->date('Y/m/d'),
        ];
    }
}
