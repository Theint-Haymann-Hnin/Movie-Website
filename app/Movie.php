<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded=['actor','actress','writer','director','genre','category','company'];

    public function actor()
    {
        return $this->belongsTo('App\Actor','actor_id');
    }
    public function actress()
    {
        return $this->belongsTo('App\Actress','actress_id');
    }
    public function writer()
    {
        return $this->belongsTo('App\Writer','writer_id');
    }
    public function director()
    {
        return $this->belongsTo('App\Director','director_id');
    }
    public function genre()
    {
        return $this->belongsTo('App\Genre','genre_id');
    }
    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }
    public function company()
    {
        return $this->belongsTo('App\Company','company_id');
    }
}
