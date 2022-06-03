<?php

namespace Database\Seeders;

use App\Models\Dato6;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Dato6Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dato6::factory(50)->create();
    }
}
