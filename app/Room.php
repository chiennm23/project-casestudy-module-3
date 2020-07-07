<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function customers()
    {
        return $this->hasMany('App\Customer','rood_id','id');
    }
}
