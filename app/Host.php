<?php

namespace App;

class Host extends User {
    public function applies() {
        return $this->hasMany(Apply::class, 'host_id');
    }

    public function ownApply(Apply $apply) {
        return $this->isSameAs($apply->host);
    }
}