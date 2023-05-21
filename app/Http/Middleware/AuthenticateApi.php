<?php

namespace App\Http\Middleware;

use App\User;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Illuminate\Database\Eloquent\Model;


class AuthenticateApi extends Middleware
{
    public function handle($request, Closure $next, ...$guards)
    {
        $token = $request->query('api_token');
        if(empty($token)){
            $token = $request->input('api_token');
        }
        if(empty($token)){
            $token = $request->bearerToken();
        }

        if(User::query()->where('api_token', $token)->exists()) {

            $request->request->remove('api_token');

            return $next($request);
        }
        abort('401', 'non auth');
    }
}
