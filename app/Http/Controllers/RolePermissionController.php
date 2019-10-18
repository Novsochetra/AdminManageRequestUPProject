<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RolePermission;
use App\Role;
use App\Permission;

class RolePermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role_permission');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role_permissions = RolePermission::with(['permission', 'role'])->get();
        
        return view('permissions.index', ['role_permissions' => $role_permissions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $features = Permission::all();

        return view('permissions.create', ['roles' => $roles, 'features' => $features]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permissions = $request->permission;
        foreach($permissions as $permission) {
            $r = Role::find($request->roles);
            $p = Permission::find($permission["feature_id"]);
            $rp = new RolePermission();

            $rp->permission()->associate($p);
            $rp->role()->associate($r);
            $rp->can_create = array_has($permission, 'can_create')  ? 1 : 0 ;
            $rp->can_read   = array_has($permission, 'can_read')    ? 1 : 0 ;
            $rp->can_update = array_has($permission, 'can_update')  ? 1 : 0 ;
            $rp->can_delete = array_has($permission, 'can_delete')  ? 1 : 0 ;
            $rp->save(); 
        };
        
        return redirect()->route('permissions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role_id = RolePermission::with('role')->find($id)->role->id;
        $rp = RolePermission::with(['role', 'permission'])->where('role_id', $role_id)->get();

        return view('permissions.show', ['role_permissions' => $rp]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles              = Role::all();
        $role_permission    = RolePermission::find($id);

        $role_id            = RolePermission::with('role')
                                ->find($id)
                                ->role
                                ->id;

        $rp                 = RolePermission::with(['role', 'permission'])
                                ->where('role_id', $role_id)
                                ->get();

        return view('permissions.edit', ['role_permissions' => $rp, 'roles' => $roles, 'role_permission' => $role_permission]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $permissions = $request->permission;
        foreach($permissions as $permission) {
            $r = Role::find($request->roles);
            $rp = RolePermission::find($permission["feature_id"]);

            $rp->role()->associate($r);
            $rp->can_create = array_has($permission, 'can_create')  ? 1 : 0 ;
            $rp->can_read   = array_has($permission, 'can_read')    ? 1 : 0 ;
            $rp->can_update = array_has($permission, 'can_update')  ? 1 : 0 ;
            $rp->can_delete = array_has($permission, 'can_delete')  ? 1 : 0 ;
            $rp->save(); 
        };
        
        return redirect()->route('permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = RolePermission::find($id)->delete();

        return redirect()->route('permissions.index');
    }
}
