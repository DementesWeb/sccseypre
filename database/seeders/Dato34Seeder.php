<?php

namespace Database\Seeders;

use App\Models\dato34;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dato34Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dato34::factory(50)->create();
    }
}
