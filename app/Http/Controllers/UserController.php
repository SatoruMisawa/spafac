<?php

namespace App\Http\Controllers;

use App\Prefecture;
use App\User;
use App\Repositories\UserRepository;
use Auth;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function new() {
        return view('user.new');
    }
        
    public function create(CreateUserRequest $request) {		
        $user = $this->createUserFrom($request);
        Auth::login($user, true);
            
        return redirect()->route('verification.email.send', $user->id);
    }

    private function createUserFrom(CreateUserRequest $request) {
        return $this->userRepository->create(
            $request->only([
                'name', 'nickname',
                'email', 'tel',
                'password',
            ])
        );
    }
}