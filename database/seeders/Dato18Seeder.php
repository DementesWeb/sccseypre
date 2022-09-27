<?php

namespace Database\Seeders;

use App\Models\dato18;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dato18Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dato18::factory(50)->create();
    }
}
