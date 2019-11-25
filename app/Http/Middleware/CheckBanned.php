<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckBanned
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
        if(auth()->check() && auth()->user()->activate == '0'){
            auth()->logout();
            $message = 'Your account has been suspended, please contact adminstrator';
            return redirect()->route('login')->withMessage($message);
        }

        if(auth()->check() && auth()->user()->activate == '2'){
            auth()->logout();
            $message = 'You have recently deactivated your account, if you would like to get your account back, please contact adminstrator';
            return redirect()->route('login')->withMessage($message);
        }
        return $next($request);
    }
}
