<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function owner()
    {
        return $this->hasMany(Owner::class);
    }
}
