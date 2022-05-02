<?php

namespace Database\Seeders;

use App\Models\TelFinal;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TelFinalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TelFinal::factory(50)->create();
    }
}
