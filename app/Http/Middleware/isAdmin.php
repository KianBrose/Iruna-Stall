<?php
namespace App\Http\Middleware;
use Closure;

class isAdmin{
    public function handle($request, Closure $next){
        if(\Auth::user()->isAdmin == 1){
            return $next($request);
        }
        abort(403);
    }
}
?>