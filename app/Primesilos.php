<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Primesilos extends Model
{
    public function rawmaterial()
    {
        return $this->belongsTo('App\Rawmaterials');
    }
}
