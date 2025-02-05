<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{  
    // REGISTER METHODS
    public function show_register_form() {
      return view("auth.register");
    }
  
    public function register(Request $request) {
      $validated_data = $request->validate([
        "username"=> 'required|string|max:255',  
        "email"=> 'required|string|max:255',
        "password"=> 'required|string|min:8|confirmed',
      ]); 
  
      User::create([
        'username'=> $validated_data['username'],
        'email'=> $validated_data['email'],
        'password'=> Hash::make($validated_data['password']),
      ]);

      return redirect()->route('show_login_form')->with('success', 'Registration successful! Please login.');
    }    
    
    

    // LOGIN METHODS
    public function show_login_form() {
      return view('auth.login');
    }
    
    public function login(Request $request) {
      $credentials = $request->validate([
        'email' => 'required|string|max:255',
        'password' => 'required|string|min:8',
      ]);

      if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
      };

      return back()->withErrors(['email' => 'Credenciais Invalidas'])->withInput($request->except('password'));
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
