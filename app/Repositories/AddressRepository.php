<?php

namespace App\Repositories;

use App\Address;

class AddressRepository {
    private $model;

    public function __construct(Address $address) {
        $this->model = $address;
    }

    public function firstOrCreate(array $data) {
        $address = $this->first($data);
        if ($address !== null) {
            return $address;
        }

        return $this->create($data);
    }

    public function first(array $data) {
        return $this->model->where($data)->first();
    }

    public function create(array $data) {
        return $this->model->create($data);
    }
}