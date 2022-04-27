<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function car()
    {
        return $this->hasMany(Car::class);
    }
}
