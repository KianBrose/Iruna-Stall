<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckEditorAccess
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
        if(\Auth::check()){
            if(\Auth::user()->editor == 1 || \Auth::user()->isAdmin == 1){
                return $next($request);
            } else {
                return abort(404);
            }
        } else{
            return abort(404);
        }
        
    }
}
