<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    use ResponseTrait;

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(isset(auth()->user()->role)){
            $role = auth()->user()->role;
        if($role!= Role::ADMIN) {
            return view('error.403');
        }
            return $next($request);
        }
            return view('error.401');

    }
}
