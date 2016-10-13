<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function histories()
    {
        return $this->hasMany('App\History');
    }
}
