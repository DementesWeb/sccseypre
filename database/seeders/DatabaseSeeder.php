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
        /* ROLE ADMINISTRADOR */
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@seypre.com';
        $user->password = bcrypt('Panama.2022');
        $user->current_team_id = 1;
        $user->save();

        $teamAdmin = new Team;
        $teamAdmin->name = 'Admin';
        $teamAdmin->user_id = 1;
        $teamAdmin->personal_team = 1;
        $teamAdmin->save();

        /* ROLES ASESOR */
        $userAsesor = new User;
        $userAsesor->name = 'Adriana Picón';
        $userAsesor->email = 'adriana@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Angie Picón';
        $userAsesor->email = 'angie@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Azael Gordón';
        $userAsesor->email = 'azael@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Carmen Reverol';
        $userAsesor->email = 'carmen@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Daniela Agudelo';
        $userAsesor->email = 'daniela@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Dorargy Toro';
        $userAsesor->email = 'dorargy@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Eukari Chirinos';
        $userAsesor->email = 'eukari@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Fadrianny Gamero';
        $userAsesor->email = 'fadrianny@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Génesis Carmona';
        $userAsesor->email = 'genesis@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Gheraldine Taba';
        $userAsesor->email = 'gtaba@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Igreily Piña';
        $userAsesor->email = 'igreily@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Kary Chapman';
        $userAsesor->email = 'kary@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Kimberli Rojas';
        $userAsesor->email = 'kimberli@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Laritza Rodriguez';
        $userAsesor->email = 'laritza@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Leninyer Gómez';
        $userAsesor->email = 'lgomez@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Lorena Abballe';
        $userAsesor->email = 'lorena@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Mildred Rangel';
        $userAsesor->email = 'mildred@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Nubia Romero';
        $userAsesor->email = 'nubia@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Penélope Kagioglu';
        $userAsesor->email = 'penelope@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Romanelvis Vera';
        $userAsesor->email = 'romavera@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Rossbeli Sangronis';
        $userAsesor->email = 'rossbeli@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Wendy Boscán';
        $userAsesor->email = 'wendy@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Brian Machado';
        $userAsesor->email = 'brian@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Sebastian Claros';
        $userAsesor->email = 'sebastian@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Susana Londoño';
        $userAsesor->email = 'susana@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Suly Muñoz';
        $userAsesor->email = 'suly@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Sara Betancur';
        $userAsesor->email = 'sara@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Ana Machado';
        $userAsesor->email = 'ana@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Sofia Leon';
        $userAsesor->email = 'sofia@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Estefania Claros';
        $userAsesor->email = 'estefania@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Julieth Giraldo';
        $userAsesor->email = 'julieth@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Camila Giron';
        $userAsesor->email = 'camila@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Carmen Alarcón';
        $userAsesor->email = 'calarcon@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Leidys Izaquita';
        $userAsesor->email = 'leidys@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Yessenia Martinez';
        $userAsesor->email = 'yessenia@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Nubia Romero';
        $userAsesor->email = 'Nubia@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Damaris Diaz';
        $userAsesor->email = 'Damarins@seypre.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();
    }
}
