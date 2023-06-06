<?php

namespace App\Http\Middleware;

use App\Responses\ApiJsonResponse;
use Closure;
use Illuminate\Support\Facades\Auth;

class ApiUserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->role_id == 1) {
            return $next($request);
        }

        return new ApiJsonResponse(['message' => 'Недостаточно прав']);
    }
}
