<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function job_requests()
    {
        return $this->belongsToMany('App\Jobrequest','job_jobrequest');
    }
}
