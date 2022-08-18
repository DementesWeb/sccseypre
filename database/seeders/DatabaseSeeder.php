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
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('Panama.2022');
        $user->current_team_id = 1;
        $user->save();

        $teamAdmin = new Team;
        $teamAdmin->name = 'Admin';
        $teamAdmin->user_id = 1;
        $teamAdmin->personal_team = 1;
        $teamAdmin->save();
        
        $user = new User;
        $user->name = 'Andrea Bohórquez';
        $user->email = 'abohorquez@admin.com';
        $user->password = bcrypt('Panama.2022');
        $user->current_team_id = 1;
        $user->save();
        
        $teamAdmin = new Team;
        $teamAdmin->name = 'Admin';
        $teamAdmin->user_id = 1;
        $teamAdmin->personal_team = 1;
        $teamAdmin->save();
    
        $user = new User;
        $user->name = 'Andrea Guzmán';
        $user->email = 'aguzman@admin.com';
        $user->password = bcrypt('Panama.2022');
        $user->current_team_id = 1;
        $user->save();

        $teamAdmin = new Team;
        $teamAdmin->name = 'Admin';
        $teamAdmin->user_id = 1;
        $teamAdmin->personal_team = 1;
        $teamAdmin->save();
    
        $user = new User;
        $user->name = 'Angie Picón';
        $user->email = 'angie@admin.com';
        $user->password = bcrypt('Panama.2022');
        $user->current_team_id = 1;
        $user->save();

        $teamAdmin = new Team;
        $teamAdmin->name = 'Admin';
        $teamAdmin->user_id = 1;
        $teamAdmin->personal_team = 1;
        $teamAdmin->save();
    
        $user = new User;
        $user->name = 'Elizabeth López';
        $user->email = 'elopez@admin.com';
        $user->password = bcrypt('Panama.2022');
        $user->current_team_id = 1;
        $user->save();

        $teamAdmin = new Team;
        $teamAdmin->name = 'Admin';
        $teamAdmin->user_id = 1;
        $teamAdmin->personal_team = 1;
        $teamAdmin->save();
    
        $user = new User;
        $user->name = 'Gheraldine Taba';
        $user->email = 'gtaba@admin.com';
        $user->password = bcrypt('Panama.2022');
        $user->current_team_id = 1;
        $user->save();

        $teamAdmin = new Team;
        $teamAdmin->name = 'Admin';
        $teamAdmin->user_id = 1;
        $teamAdmin->personal_team = 1;
        $teamAdmin->save();
    
        $user = new User;
        $user->name = 'Jose de la Guardia';
        $user->email = 'jmg@admin.com';
        $user->password = bcrypt('Panama.2022');
        $user->current_team_id = 1;
        $user->save();

        $teamAdmin = new Team;
        $teamAdmin->name = 'Admin';
        $teamAdmin->user_id = 1;
        $teamAdmin->personal_team = 1;
        $teamAdmin->save();
    
        $user = new User;
        $user->name = 'Julio Tejada';
        $user->email = 'jtejada@admin.com';
        $user->password = bcrypt('Panama.2022');
        $user->current_team_id = 1;
        $user->save();

        $teamAdmin = new Team;
        $teamAdmin->name = 'Admin';
        $teamAdmin->user_id = 1;
        $teamAdmin->personal_team = 1;
        $teamAdmin->save();
    
        $user = new User;
        $user->name = 'Selene Cuenca';
        $user->email = 'selene@admin.com';
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
        $userAsesor->email = 'adriana@asesor.com';
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
        $userAsesor->email = 'azael@asesor.com';
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
        $userAsesor->email = 'carmen@asesor.com';
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
        $userAsesor->email = 'daniela@asesor.com';
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
        $userAsesor->email = 'dorargy@asesor.com';
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
        $userAsesor->email = 'eukari@asesor.com';
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
        $userAsesor->email = 'fadrianny@asesor.com';
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
        $userAsesor->email = 'genesis@asesor.com';
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
        $userAsesor->email = 'igreily@asesor.com';
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
        $userAsesor->email = 'kary@asesor.com';
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
        $userAsesor->email = 'kimberli@asesor.com';
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
        $userAsesor->email = 'laritza@asesor.com';
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
        $userAsesor->email = 'lgomez@asesor.com';
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
        $userAsesor->email = 'lorena@asesor.com';
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
        $userAsesor->email = 'mildred@asesor.com';
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
        $userAsesor->email = 'penelope@asesor.com';
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
        $userAsesor->email = 'romavera@asesor.com';
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
        $userAsesor->email = 'rossbeli@asesor.com';
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
        $userAsesor->email = 'wendy@asesor.com';
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
        $userAsesor->email = 'brian@asesor.com';
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
        $userAsesor->email = 'sebastian@asesor.com';
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
        $userAsesor->email = 'susana@asesor.com';
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
        $userAsesor->email = 'suly@asesor.com';
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
        $userAsesor->email = 'sara@asesor.com';
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
        $userAsesor->email = 'ana@asesor.com';
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
        $userAsesor->email = 'sofia@asesor.com';
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
        $userAsesor->email = 'estefania@asesor.com';
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
        $userAsesor->email = 'julieth@asesor.com';
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
        $userAsesor->email = 'calarcon@asesor.com';
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
        $userAsesor->email = 'leidys@asesor.com';
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
        $userAsesor->email = 'yessenia@asesor.com';
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
        $userAsesor->email = 'Nubia@asesor.com';
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
        $userAsesor->email = 'Damarins@asesor.com';
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
        $userAsesor->email = 'camila@asesor.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Luisa Alvarado';
        $userAsesor->email = 'luisa@asesor.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Alejandra Valencia';
        $userAsesor->email = 'alejandra@asesor.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Jorge Chavarria';
        $userAsesor->email = 'jorge@asesor.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Valentina Muriel';
        $userAsesor->email = 'valentina@asesor.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Jefferson Martinez';
        $userAsesor->email = 'Jefferson@asesor.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Federico Mejia';
        $userAsesor->email = 'federico@asesor.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Evelyn Bravo';
        $userAsesor->email = 'evelyn@asesor.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Edier Ocampo';
        $userAsesor->email = 'edier@asesor.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Dorelis Santos';
        $userAsesor->email = 'dorelis@asesor.com';
        $userAsesor->password = bcrypt('Asesor.2022');
        $userAsesor->current_team_id = 2;
        $userAsesor->save();

        $teamAsesor = new Team;
        $teamAsesor->name = 'Asesor';
        $teamAsesor->user_id = 2;
        $teamAsesor->personal_team = 1;
        $teamAsesor->save();

        $userAsesor = new User;
        $userAsesor->name = 'Nemecys Granados';
        $userAsesor->email = 'nemecys@asesor.com';
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
