<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customer>
 */
class CustomerFactory extends Factory
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
            'nombre_y_apellido' => $this->faker->name(),
            'cedula' => $this->faker->ssn(),
            'cargo' => $this->faker->company(),
            'sueldo' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'sobresueldo' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'sueldo_neto' => $this->faker->numberBetween($min = 1000, $max = 9000),
            '35_porciento' => $this->faker->numberBetween($min = 1000, $max = 9000),
            '25_porciento' => $this->faker->numberBetween($min = 1000, $max = 9000),
            '20_porciento' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'COD_1' => $this->faker->company(),
            'DES_1' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'FEC_1' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'COD_2' => $this->faker->company(),
            'DES_2' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'FEC_2' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'COD_3' => $this->faker->company(),
            'DES_3' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'FEC_3' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'COD_4' => $this->faker->company(),
            'DES_4' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'FEC_4' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'COD_5' => $this->faker->company(),
            'DES_5' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'FEC_5' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'COD_6' => $this->faker->company(),
            'DES_6' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'FEC_6' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'COD_7' => $this->faker->company(),
            'DES_7' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'FEC_7' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'COD_8' => $this->faker->company(),
            'DES_8' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'FEC_8' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'COD_9' => $this->faker->company(),
            'DES_9' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'FEC_9' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'COD_10' => $this->faker->company(),
            'DES_10' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'FEC_10' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'COD_11' => $this->faker->company(),
            'DES_11' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'FEC_11' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'COD_12' => $this->faker->company(),
            'DES_12' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'FEC_12' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}