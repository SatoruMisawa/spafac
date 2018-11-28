<?php

namespace App\Http\Controllers;

use App\Prefecture;
use App\User;
use App\Repositories\UserRepository;
use App\Http\Requests\CreateUserRequest;
use Auth;
use Hash;
use ImageStorage;

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
            $user = $this->createUser($request);
            Auth::guard('users')->login($user, true);
            return redirect()->route('verification.email.send', $user->id);
            
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
    }

    private function createUser(CreateUserRequest $request) {
        $data = $this->data($request);
        $filename = ImageStorage::store($request->file('profile_image'));
        return $this->userRepository->create($data + [
            'profile_image_url' => config('app.url').'/'.$filename,
        ]);
    }

    private function data(CreateUserRequest $request) {
        return $request->only([
            'family_name', 'given_name', 'email',
        ]) + ['password' => Hash::make($request->get('password'))];
    }
}
