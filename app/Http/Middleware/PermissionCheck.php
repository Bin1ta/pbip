<?php

namespace App\Http\Middleware;

use App\Models\Role;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PermissionCheck
{

    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        if (!app()->runningInConsole() && $user) {
            $roles = Role::with('permissions')->get();

            foreach ($roles as $role) {
                foreach ($role->permissions as $permission) {
                    $permissionArray[$permission->title][] = $role->id;
                }
            }

            foreach ($permissionArray as $title => $roles) {
                Gate::define($title, function (User $user) use ($roles) {
                    return in_array($user->role_id, $roles);
                });
            }
        }
        return $next($request);
    }
}
