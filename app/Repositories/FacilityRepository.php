<?php

namespace App\Repositories;

use App\Facility;

class FacilityRepository {
    private $model;

    public function __construct(Facility $facility) {
        $this->model = $facility;
    }

    public function new(array $data) {
        return new $this->model($data);
    }

    public function find($id) {
        return $this->model->find($id);
    }

    public function update($id, array $data) {
        $facility = $this->find($id);
        $facility->update($data);
        return $this->find($facility->id);
    }
}