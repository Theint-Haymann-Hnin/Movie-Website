<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actress extends Model
{
    protected $guarded=[];
    public function movies()
    {
        return $this->hasMany('App\Movie');
    }
}
