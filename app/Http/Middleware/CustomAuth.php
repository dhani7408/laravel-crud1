<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   //echo 'hii Middleware';
        /*$path =$request->path();
        if(($path=='/' || $path=='create') && Session::get('userEmail')){
            return redirect('/user');
        }elseif(($path!='/') && !Session::get('userEmail')){
            return redirect('/');
        }*/
        return $next($request);
    }
}
