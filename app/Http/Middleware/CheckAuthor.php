<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Role;
use App\Enums\GuardEnums;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAuthor
{

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(isset(auth()->user()->role)){
            $role = auth()->user()->role;
        if($role!= GuardEnums::AUTHOR->value) {
            abort(403, 'Unauthorized');
        }
        return $next($request);
        }
        return view('errors.401');
    }
}



