<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CheckIfBanned
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (Auth::check() && Auth::user()->is_banned == 1) {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            Alert::error('Banned!','You have been banned!');

            return redirect()->route('login');
        }

        return $response;
    }
}
