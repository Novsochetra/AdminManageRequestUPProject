<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role_permission');
    }

    public function index()
    {
        $roles = Role::paginate(5);
        return view('roles.index', ['roles' => $roles]);
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required'
        ]);

        $data = $request->all();

        Role::create($data);

        return redirect()->route('roles.index');
    }

    public function show($id)
    {
        $role = Role::find($id);
        return view('roles.show', ['role' => $role]);
    }

    public function edit($id)
    {
        $role = Role::find($id);
        return view('roles.edit', ['role' => $role]);
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'name' => 'required'
        ]);

        $data = $request->all();

        $role = Role::find($id)->update($data);

        return redirect()->route('roles.index');
    }

    public function destroy($id)
    {
        $role = Role::find($id)->delete();

        return redirect()->route('roles.index');
    }
}
