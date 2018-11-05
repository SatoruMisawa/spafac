<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tester extends Model
{
    public function login() {
        $this->remembered();
        session([
            'tester_id' => $this->id,
            'tester_remember_token' => $this->remember_token,
        ]);
    }

    public function remembered() {
        if ($this->remember_token !== null) {
            return;
        }
        
        $this->remember_token = str_random(25);
        $this->save();
    }

    public function logout() {
        $this->forgotten();
        session([
            'tester_id' => null,
            'tester_remember_token' => null,
        ]);
    }

    public function forgotten() {
        $this->remember_token = null;
        $this->save();
    }
}
