<?php

namespace App\Http\Middleware;

use App\Traits\IpCheckTrait;
use Closure;
use Auth;

class CheckIP
{
    use IpCheckTrait;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        IpCheckTrait::check();
        return $next($request);
    }
}