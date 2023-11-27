<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserGuard
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
        if(!Auth::check()){
            $request->session()->flash('class','alert-primary');
            $request->session()->flash('message','Please Login to access your dashboard.');
            return redirect()->to('/login');
        }
        $roleHere = auth()->user()->load('role')->toArray()['role']['name'];
        if (Auth::check()  && isset($roleHere) && $roleHere == 'User') {
            return $next($request);
        }
        else{
            $request->session()->flash('class','alert-primary');
            $request->session()->flash('message','Only the User may access this URL.');
            return redirect()->to('/login');
        }
    }
}
