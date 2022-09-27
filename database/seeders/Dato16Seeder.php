<?php

namespace Database\Seeders;

use App\Models\Dato16;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dato16Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dato16::factory(50)->create();
    }
}
