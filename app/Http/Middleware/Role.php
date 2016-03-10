<?php

namespace App\Http\Middleware;

use Closure;

class Role
{
    protected $hierarchy = [
        'admin' => 1,
        'apoderado' => 0
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if($role=="Admin")

            return $next($request);

        else

            return redirect()->guest(route('mi-jardin'));
    }
}
