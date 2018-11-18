<?php

namespace App\Http\Controllers;

use App\Prefecture;
use App\User;
use App\Repositories\UserRepository;
use App\Http\Requests\CreateUserRequest;
use Auth;
use Hash;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function new() {
        try {
            return view('user.new');   
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
    }
        
    public function create(CreateUserRequest $request) {
        try {
            $data = $this->data($request);
            $user = $this->userRepository->create($data);
            Auth::login($user, true);
                
            return redirect()->route('verification.email.send', $user->id);
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
    }

    private function data(CreateUserRequest $request) {
        return $request->only([
            'name', 'nickname',
            'email', 'tel',
        ]) + ['password' => Hash::make($request->get('password'))];
    }
}