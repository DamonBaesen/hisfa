<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rawmaterials extends Model
{
    public function stok()
    {
        return $this->hasMany('App\Primesilos');
    }
}
