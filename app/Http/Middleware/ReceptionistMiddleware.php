<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ReceptionistMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->role != 'receptionist'){
            alert()->error('Oops', 'Anda bukan receptionist');
            return redirect()->back();
        }
        return $next($request);
    }
}
