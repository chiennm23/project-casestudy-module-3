<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function customers()
    {
        return $this->belongsToMany('App\Customer','detail','room_id','customer_id');
    }

    public function bills(){
        return $this->hasMany('App\Bill','room_id','id');
    }
}
