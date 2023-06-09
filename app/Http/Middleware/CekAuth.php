<?php

namespace App\Http\Middleware;

use Closure, Auth;
use Illuminate\Http\Request;

class CekAuth
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
        foreach ($levels as $key => $level) {
            if ($level == auth()->user()->level) {
                return $next($request);
            }
        }

        return redirect('/login')->with('error', 'failed LogIn');
    }
}
