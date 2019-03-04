<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Captain extends Model
{
    public function images()
    {
        return $this->belongsToMany('App\Image');
    }

    public function assignments ()
    {
        return $this->hasMany('\App\Assignment');
    }
}
