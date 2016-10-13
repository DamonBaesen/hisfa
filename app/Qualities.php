<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualities extends Model
{
    public function historiek()
    {
        return $this->belongsTo('App\Stock');
    }
}
