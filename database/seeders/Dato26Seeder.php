<?php

namespace Database\Seeders;

use App\Models\dato26;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dato26Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dato26::factory(50)->create();
    }
}
