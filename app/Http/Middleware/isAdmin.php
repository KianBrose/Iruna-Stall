<?php
namespace App\Http\Middleware;
use Closure;

class isAdmin{
    public function handle($request, Closure $next){
        if(\Auth::check()){
            if(\Auth::user()->isAdmin == 1){
                return $next($request);
            }
            return abort(404);
        } else{
            return abort(404);
        }
        
    }
}
?>