<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    public function gebruiker()
    {
        return $this->belongsTo('App\User','user_id', 'id');    }
}
