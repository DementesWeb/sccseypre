<?php

namespace Database\Seeders;

use App\Models\TIGO_2021;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TIGO2021Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TIGO_2021::factory(50)->create();
    }
}
