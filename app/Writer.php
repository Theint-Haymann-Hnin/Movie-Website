<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    protected $guarded=[];
    public function movies()
    {
        return $this->hasMany('App\Movie');
    }
}
