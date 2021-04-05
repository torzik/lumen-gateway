<?php

namespace App\Http\Middleware;

use Closure;

class ApiAuthentication
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
        $token = $request->bearerToken();

        if(!$token) {
            return response()->json('No token provided', 401);
        }

        if ($this->validateToken($token)) {
            return $next($request);
        } else{
            return response([
                'message' => 'Unauthenticated'
            ], 403);
        }

        return $next($request);
    }

    public function validateToken($token) {

        $calculated = md5(env('SALT'));

        return $calculated === $token ? true : false;
    }
}
