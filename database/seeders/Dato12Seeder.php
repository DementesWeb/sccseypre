<?php

namespace Database\Seeders;

use App\Models\dato12;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dato12Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dato12::factory(50)->create();
    }
}
