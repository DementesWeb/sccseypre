<?php

namespace Database\Seeders;

use App\Models\Dato14;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dato14Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dato14::factory(50)->create();
    }
}
