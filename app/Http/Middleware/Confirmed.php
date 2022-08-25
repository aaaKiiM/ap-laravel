<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Confirmed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->is_penjual == 1 && auth()->user()->toko->confirmed == 1){
            return $next($request);
        }elseif (auth()->user()->toko->confirmed == 0){
            return redirect('/penjual/verifikasi');
        }else{
            return $next($request);
        }
    }
}
