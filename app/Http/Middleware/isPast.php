<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Carbon;
class isPast
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $now = Carbon::now('GMT')->timestamp;
        $dead_line = Carbon::create(2021, 02, 12, 21, 30, 0, 'GMT')->timestamp;
        if($now > $dead_line)
            return back();
        return $next($request);
    }
}
