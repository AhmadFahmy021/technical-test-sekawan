<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthAgreeController extends Controller
{
    public function login() {
        return view('authAgree.loginAgree');
    }

    public function credentias(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' =>'required|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('agree/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function showFormregister()  {
        return view('authAgree.registerAgree');
    }
    public function createAccount(Request $request)  {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'position' => ['required', 'string', 'max:255',],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'position' => $request->position,
            'role' => 'agreement',
            'password' => Hash::make($request->password),
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('agree/dashboard');
        }
        
        return redirect('agree/login');
    }
    public function logout(Request $request)  {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('agree/login');
    }
}
