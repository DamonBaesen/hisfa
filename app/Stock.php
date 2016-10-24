<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function stok()
    {
        return $this->belongsTo('App\Qualitie', 'qualitie_id', 'id');
            
    }
}
