<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Primesilos extends Model
{
    public function grondstof()
    {
        return $this->belongsTo('App\Rawmaterials');
    }
}
