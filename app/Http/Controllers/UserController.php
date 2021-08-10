<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
   
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(15);
        return view('user.index', compact('users'));
    }


    public function create()
    {
        $roles = Role::select('id', 'name')->get();
        return view('user.create', compact('roles'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => ['required', 'unique:users,username'],
            'name' => ['required', 'string'],
            'nik' => ['required', 'numeric'],
            'email' => ['required', 'email'],
            'phone_number' => ['required', 'numeric'],
            'gender' => ['required', 'in:male,female'],
            'address' => ['required', 'string'],
            'role' => ['required', 'exists:roles,name'],
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'min:8'],
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($request->password);
        $user = User::create($input);
        $user->assignRole($request->role);

        return redirect()->route('user.index');
    }

    public function edit(User $user)
    {
        $roles = Role::select('id', 'name')->get();
        return view('user.edit', compact('user', 'roles'));
    }


    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'username' => ['required', 'unique:users,username,'. $user->id],
            'name' => ['required', 'string'],
            'nik' => ['required', 'numeric'],
            'email' => ['required', 'email'],
            'phone_number' => ['required', 'numeric'],
            'gender' => ['required', 'in:male,female'],
            'address' => ['required', 'string'],
            'role' => ['required', 'exists:roles,name'],
        ]);

        $input = $request->all();
        $user->update($input);
        $user->syncRoles($request->role);

        return redirect()->route('user.index');
    }

  
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index');
    }
}
