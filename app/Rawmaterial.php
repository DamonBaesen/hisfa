<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rawmaterial extends Model
{
    public function stok()
    {
        return $this->hasMany('App\Primesilo');
    }
}
