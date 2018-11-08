<?php

namespace App\Repositories;

use App\User;
use App\Http\Requests\CreateUserRequest;

class UserRepository {
    private $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function create(array $data) {
        return $this->user->create($data);
    }
}