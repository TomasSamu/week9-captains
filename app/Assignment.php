<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = ['subject', 'description'];

    public function captain()
    {
        return $this->belongsTo('\App\Captain');
    }
}
