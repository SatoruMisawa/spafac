<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $fillable = [
        'guest_id', 'host_id', 'plan_id', 'price',
    ];

    public function guest() {
        return $this->belongsTo(User::class, 'guest_id');
    }

    public function host() {
        return $this->belongsTo(User::class, 'host_id');
    }

    public function plan() {
        return $this->belongsTo(Plan::class);
    }

    public function options() {
        return $this->belongsToMany(Option::class);
    }

    public function addRelationshipToOptions(array $options, array $optionCounts) {
        foreach ($options as $option) {
            $this->options()->save(Option::find($option['id']), [
                'count' => $optionCounts[$option['id']],
            ]);
        }
    }
}