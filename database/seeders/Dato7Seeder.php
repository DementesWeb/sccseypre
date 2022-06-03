<?php

namespace Database\Seeders;

use App\Models\Dato7;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dato7Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dato7::factory(100)->create();
    }
}
