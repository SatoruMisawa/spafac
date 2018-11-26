<?php

namespace App;

class Host extends User {
    public function applies() {
        return $this->hasMany(Apply::class, 'host_id');
    }
}