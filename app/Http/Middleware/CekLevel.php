<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
// use Illuminate\Auth\Middleware\CekLevel as Middleware;
use Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        if(in_array($request->user()->ceklevel, $levels)){
        return $next($request);
        }
        // return redirect('admin');

        // if(Auth::check() && Auth::user()->ceklevel == 'admin') {
        //     return $next($request);
        // }
        //     // return redirect('admindashboard');
        // } elseif (Auth::user()->level == 'user') {
        // }
        // // $roles = array_slice(func_get_args(), 2);

        // foreach ($roles as $role) { 
        //     $user = Auth::user()->ceklevel;
        //     if( $user == $role){
        //         return $next($request);
        //     }
        // }

        return redirect('admin');
    }
    
}
