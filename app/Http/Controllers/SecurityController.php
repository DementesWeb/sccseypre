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

        $user = User::latest()
            ->paginate();
        $team = Team::latest()
            ->paginate();

        return Inertia::render('Security/Users',['user'=> $user, 'team' => $team]);
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

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'current_team_id' => $data['current_team_id'],
        ]);


        return Inertia::render('Security/Edit',compact('user'));
    }



    public function edit(User $user){
        return Inertia::render('Security/Edit',compact('user'));
    }

    public function update(Request $request, User $user){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            /* 'password'=> 'required', */
            'current_team_id'=> 'nullable',
        ]);

        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
            /* 'password' => Hash::make($data['password']), */
            'current_team_id' => $data['current_team_id'],
        ]);

        return Inertia::render('Security/Edit',compact('user'));
        
    }
}
