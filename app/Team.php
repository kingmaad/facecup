<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable=['isVerified','otp'];
    
    public function members()
    {
        return $this->hasMany('App\Member');

    }
}
