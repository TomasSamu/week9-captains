<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function captain()
    {
        return $this->belongsTo('App\Captain');
    }
}
