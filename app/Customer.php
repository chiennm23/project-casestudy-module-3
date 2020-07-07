<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function room()
    {
        return $this->belongsTo('App\Room','room_id','id');
    }
}
