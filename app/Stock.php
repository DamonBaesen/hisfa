<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function quality()
    {
        return $this->belongsTo('App\Qualities');
    }
}
