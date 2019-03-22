<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
        //后台中间件检查session中有没有admin 
        if (session('admin')) {
           // ok 通过 进行下次请求
            return $next($request);
        }else{
            return redirect('login');
        } 


    }
}
