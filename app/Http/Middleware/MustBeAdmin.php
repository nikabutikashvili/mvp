<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MustBeAdmin
{

    public function handle(Request $request, Closure $next)
    {
        if(auth()->guest()) {
            abort(Response::HTTP_FORBIDDEN);
        }
        if(auth()->user()->email != "nika@admin.com") {
            abort(Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}
