<?php

namespace App\Http\Middleware;

use App\Team;
use Closure;

class isVerified
{
    protected $except = [
        //
        
        'chunkedupload',
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session('user_id'))
        {
            $team = Team::where('id',session('user_id'))->first();
            if($team && $team->isVerified)
                return $next($request);
            else 
                return redirect('VerifyAccount');
        }
        else
        {
            return redirect('/login');
        }
        
    }
}
