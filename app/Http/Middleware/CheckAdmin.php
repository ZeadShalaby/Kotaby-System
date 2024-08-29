<?php

namespace App\Http\Middleware;

use Closure;
use App\Enums\GuardEnums;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;
use Illuminate\Support\Facades\Auth;
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

        
        if(isset(Auth::guard('admin')->user()->role)){
            $role = Auth::guard('admin')->user()->role;
        if($role!= GuardEnums::ADMIN->value) {
            abort(403, 'Unauthorized');
        }
            return $next($request);
        }
        abort(401, 'Unauthentication');
    }
}
