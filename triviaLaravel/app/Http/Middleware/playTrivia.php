<?php

namespace App\Http\Middleware;

use Closure;

class playTrivia
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
         if ($this->auth->guest()) {
                 return redirect('/login');
            }
            return $next($request);
        }
}
