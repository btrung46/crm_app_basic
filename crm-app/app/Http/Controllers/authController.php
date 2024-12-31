<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function authetication()
    {
        $valid = request()->validate([
            'email' => 'required|email|',
            'password' => 'required|min:8',
        ]);
        if(auth()->attempt($valid)) {
            request()->session()->regenerate();
            return redirect()->route('dashboard')->with('success','login successfull');
        }
    }
    public function login(Request $request)
    {
        return view('auth.login');
    }
    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'logged out successfully');
        
    }
    public function register()
    {
        return view('auth.register');
    }
    public function store()
    {
        $valid = request()->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);
        $user = User::create([
            'name' => $valid['name'],
            'email' => $valid['email'],
            'password' => Hash::make($valid['password']),
        ]);

        return redirect()->route('login')->with('success', 'User created successfull please Login');
    }
}
