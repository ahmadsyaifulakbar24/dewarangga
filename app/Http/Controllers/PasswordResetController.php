<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordResetController extends Controller
{
    public function request()
    {
        return view('auth.passwords.username');
    }

    public function reset(Request $request)
    {
        $this->validate($request, [
            'username' => ['required', 'exists:users,username']
        ]);

        $user = User::where('username', $request->username)->first();
        return view('auth.passwords.new_password', compact('user'));
    }

    public function update_password(Request $request)
    {
        $this->validate($request, [
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'min:8'],
        ]);

        $user = User::findOrFail($request->user_id);
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }
}
