<?php

namespace Database\Seeders;

use App\Models\CableOnda;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CableOndaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CableOnda::factory(50)->create();
    }
}
