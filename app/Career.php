<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $guarded=['id'];

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function experience()
    {
        return $this->belongsTo('App\Experience');
    }
}
