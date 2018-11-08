<?php

namespace App\Http\Controllers;

use App\Prefecture;
use App\User;
use App\Repositories\UserRepository;
use Auth;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    private $repo;

    public function __construct(UserRepository $repo) {
        $this->repo = $repo;
    }

    public function new() {
        return view('user.new');
    }
        
    public function create(CreateUserRequest $request) {		
        $user = $this->repo->create($request->all());
        Auth::login($user, true);
            
        return redirect()->route('verification.email.send', $user->id);
    }
}