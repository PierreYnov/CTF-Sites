<?php

namespace BoltCTF\Http\Middleware;

use Closure;

class PlayerProtect
{
  /**
   * Handle an incoming request to check if organization role logged in
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
   public function handle($request, Closure $next)
   {
     return $next($request);
   }
}
