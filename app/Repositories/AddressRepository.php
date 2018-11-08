<?php

namespace App\Repositories;

use App\Address;

class AddressRepository implements Repository {
    private $model;

    public function __construct(Address $address) {
        $this->model = $address;
    }

    public function create(array $data) {
        return $this->model->create([
            'prefecture_id' => $data['prefecture_id'],
			'zip' => $data['zip'],
			'address1' => $data['address1'],
			'address1_ruby' => $data['address1_ruby'],
			'address2' => $data['address2'],
			'address2_ruby' => $data['address2_ruby'],
			'address3' => $data['address3'],
			'address3_ruby' => $data['address3_ruby'],
			'latitude' => $data['latitude'],
			'longitude' => $data['longitude'],
        ]);
    }
}