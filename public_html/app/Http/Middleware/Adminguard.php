<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Adminguard
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
        if (Auth::check()) {
            $roleHere = auth()->user()->load('role')->toArray()['role']['name'];
            if (Auth::check() && isset($roleHere) && $roleHere == 'Admin') {
                if ($request->user()->status == 1) {
                    return $next($request);
                } else {
                    Auth::logout();
                    $request->session()->flash('class','alert-primary');
                    $request->session()->flash('message','Your accout is not activate.');
                    return redirect()->route('adminLogin');
                }
            }
            else{
                $request->session()->flash('class','alert-primary');
                $request->session()->flash('message','You can\'t access this url.');
                return redirect()->route('adminLogin');
            }
        } else {
            $request->session()->flash('class','alert-primary');
            $request->session()->flash('message','Please Login Now.');
            return redirect()->route('adminLogin');
        }

    }
}
