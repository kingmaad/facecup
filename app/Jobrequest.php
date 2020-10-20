<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobrequest extends Model
{
    //
    public function jobs()
    {
        return $this->belongsToMany('App\Job','job_jobrequest');
    }
}
