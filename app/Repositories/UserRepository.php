<?php

namespace App\Repositories;

use App\User;
use App\Http\Requests\CreateUserRequest;
use Hash;

class UserRepository {
    private $model;

    public function __construct(User $user) {
        $this->model = $user;
    }

    public function create(array $data) {
        return $this->model->create($data);
    }
}