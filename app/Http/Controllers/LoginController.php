<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\User;

class LoginController extends Controller
{
    public function index(){
      return view('login.login-cafe');
    }

    public function postlogin(Request $request){
      $credentials = $request->validate([
        'username' => ['required'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('dashboard');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
    
  }
  public function logout() {
    Auth::logout();
    return redirect ('login');
}

    } 