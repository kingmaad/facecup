<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable=['isVerified','otp','mobile'];
    
    public function members()
    {
        return $this->hasMany('App\Member');

    }

    public function file()
    {
        return $this->hasOne('App\TeamFile');
    }
}
