<?php

namespace App\Http\Middleware;

use App\Http\Errors\CustomErrors;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\UnauthorizedException;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$role_ids)
    {
        if(!in_array(Auth::user()->role_id,$role_ids)){
            return response()->json(CustomErrors::getError(401));
        }
        return $next($request);
    }
}
