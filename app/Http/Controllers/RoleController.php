<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('role.index', compact('roles'));
    }

    public function create()
    {
        return view('role.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'role' => ['required', 'string'],
            'permission' => ['array']
        ]);

        $role = Role::create([ 'name' => $request->role ]);
        $role->givePermissionTo($request->permission);

        return redirect()->route('role.index');
    }

    public function edit(Role $role)
    {
        return view('role.update', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        $this->validate($request, [
            'role' => ['required', 'string'],
            'permission' => ['array']
        ]);

        $role->update([ 'name' => $request->role ]);
        $role->syncPermissions($request->permission);

        return redirect()->route('role.index');
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('role.index');
    }
}
