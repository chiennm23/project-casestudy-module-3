<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function rooms()
    {
        return $this->belongsToMany('App\Room','detail','customer_id','room_id');
    }
}
