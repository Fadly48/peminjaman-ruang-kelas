<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register', $data);
    }
    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:tb_user',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        // Menyimpan data user baru
        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'Registration Successful. Please Login!');
    }
    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login', $data);
    }
    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard/peminjaman');
        }
        return back()->withErrors(['password' => 'Wrong username or password!']);
    }
}
