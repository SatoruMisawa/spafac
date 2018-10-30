<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserProvider extends Pivot
{
    protected $table = 'user_provider';
}
