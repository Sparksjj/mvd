<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Group;
use Closure;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (Auth::user()) {
            $haveGroups = Auth::user()->groups;
        }else{
            $haveGroups = [Group::where('id', 1)->first()];
        }

        switch ($role) {
            case 'museum_employee':
                $needRole = 2;
                break;
            case 'museum_device':
                $needRole = 3;
                break;            
            default:
                $needRole = 1;
                break;
        }

        foreach ($haveGroups as $value) {
            if ($value->id == $needRole || $value->id == 2) {
                return $next($request);
            }
        }

        return redirect(route('main.index'));
        
    }
}
