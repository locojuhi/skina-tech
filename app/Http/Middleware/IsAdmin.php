<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdmin
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
        if($request->route()->parameters()['user'] == Auth::user()->id && Auth::user()->role_id == 2){
            return $next($request);
        }elseif(Auth::user()->role_id == 1){
            return $next($request);
        }else{
            return redirect()->action('UserController@show', ['id' => Auth::user()->id]);
        }
    }
}
