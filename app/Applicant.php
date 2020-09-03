<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $guarded=['id'];

    public function career()
    {
        return $this->belongsTo('App\Career');
    }
}
