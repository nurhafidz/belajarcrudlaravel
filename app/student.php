<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public function motors()
    {
        return $this->belongsTo(Motors::class);
    }
}
