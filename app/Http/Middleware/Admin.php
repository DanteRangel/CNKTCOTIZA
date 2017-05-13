<?php

namespace CNKTCOTIZA\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Admin
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
        if(Auth::guest()){

                return redirect('home');
        }else{
        if(Auth::user()->TipoPermiso==2){
                return $next($request);
    

        }else{
                return redirect('home');
        }
    }

    }
}
