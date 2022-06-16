<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@email.com';
        $user->password = bcrypt('Panama.2022');
        $user->current_team_id = 1;
        $user->save();
        //$user->assignRole($rolAdmin);
        
        $teamAdmin = new Team;
        $teamAdmin->name = 'Admin';
        $teamAdmin->user_id = 1;
        $teamAdmin->personal_team = 1;
        $teamAdmin->save();

        $userAsesor = new User;
        $userAsesor->name = 'asesor';
        $userAsesor->email = 'asesor@email.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();
        //$user->assignRole($rolAsesor);

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

    }
}
