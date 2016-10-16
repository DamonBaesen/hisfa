<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualitie extends Model
{
    public function historiek()
    {
        return $this->hasMany('App\Stock');
    }
}
