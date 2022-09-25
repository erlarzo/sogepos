<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
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
        $user_id = Auth::user()->id;
        $userrole = User::find($user_id)->getRole();
        $roles = ['admin','owner'];

        if(in_array($userrole, $roles)) {
            return $next($request);
        }

        return redirect('/');
    }
}
