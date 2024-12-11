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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255', // Validasi email
            'password' => 'required|string|min:8|confirmed', // Gunakan 'confirmed' untuk password confirmation
        ]);

        // Menyimpan data user baru
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
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
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard/peminjaman');
        }
        return back()->withErrors(['password' => 'Wrong username or password!']);
    }
}
