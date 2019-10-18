<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Support\Str;

use App\RolePermission;
use App\Role;
use App\Permission;

class AuthenticateRolePermission
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
        $route = $request->route();
        $role = Auth::user();
        // index
        // store
        // create
        // destroy
        // update
        // show
        // edit

        $routeName  = $route->getName();
        $actionName = explode('.', $routeName)[1];
        $controllerName = explode('.', $routeName)[0];
        $permission = Permission::where('name', $controllerName)->first();
        
        $rp = RolePermission::where('role_id', Auth::user()->role->id)
                ->where('permission_id', $permission->id)
                ->first();

        if(array_has($rp, 'can_create') && $rp->can_create && ($actionName == "store" || $actionName == "create")) {
            return $next($request);
        } else if(array_has($rp, 'can_create') && $rp->can_read && ($actionName == "index" || $actionName == "show")) {
            return $next($request);
        } else if(array_has($rp, 'can_create') && $rp->can_update && ($actionName == "edit" || $actionName == "update")) {
            return $next($request);
        } else if(array_has($rp, 'can_create') && $rp->can_create && $actionName == "destroy") {
            return $next($request);
        } else {
            return redirect('/dashboard');;
        }

    }
}
