<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class agentGuard
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
            $request->session()->flash('message','Please Login to access your dashboard');
            return redirect()->to('/login');
        }

        $roleHere = auth()->user()->load('role')->toArray()['role']['name'];
        if (Auth::check() && isset($roleHere) && $roleHere == 'Agent') {
            if ($request->user()->status == 1) {
                return $next($request);
            } else {
                Auth::logout();
                $request->session()->flash('class','alert-primary');
                $request->session()->flash('message','Your Account is in pending sttatus, you will recirved an email when the admin approve your request.');
                return redirect()->to('/login');
            }
            //dd('');
        }
        else{
            $request->session()->flash('class','alert-primary');
            $request->session()->flash('message','Only the Agent may access this URL.');
            return redirect()->to('/login');

        }
    }
}
