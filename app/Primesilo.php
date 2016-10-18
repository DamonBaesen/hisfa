<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Primesilo extends Model
{
    public function grondstof()
    {
        return $this->belongsTo('App\Rawmaterial','rawmaterial_id', 'id');
    }
}
