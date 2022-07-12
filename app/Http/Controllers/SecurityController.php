<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Team;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class SecurityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $filters = $request->all('search');

        $usuario = User::latest()
            ->paginate();
        $team = Team::latest()
            ->paginate();

        return Inertia::render('Security/Index',['usuario'=> $usuario, 'filters' => $filters]);
    }

    public function create(Request $request){
        return Inertia::render('Security/Create');
    }

    public function store(Request $request){


        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password'=> 'required',
            'current_team_id'=> 'nullable',
        ]);

        $usuario = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'current_team_id' => $data['current_team_id'],
        ]);


        return Inertia::render('Security/Edit',compact('usuario'));
    }



    public function edit(User $usuario){
        return Inertia::render('Security/Edit',compact('usuario'));
    }

    public function update(Request $request, User $usuario){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            /* 'password'=> 'required', */
            'current_team_id'=> 'nullable',
        ]);

        $usuario->update([
            'name' => $data['name'],
            'email' => $data['email'],
            /* 'password' => Hash::make($data['password']), */
            'current_team_id' => $data['current_team_id'],
        ]);

        //return Inertia::render('Security/Edit',compact('usuario'));
        return redirect()->route('security.index');
    }

    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('security.index');
    }
}
