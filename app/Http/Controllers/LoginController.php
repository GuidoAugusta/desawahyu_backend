<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
      return view('login.index', [
        'title' => 'login'
      ]);
    }

    public function admin() {
      return view('login.admin',[
        'title' => 'admin'
      ]);
    }

    public function authenticate(Request $request) {
      $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
      ]);

      if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/surat')->with('LoginSuccess', 'Login Success');
      }

      return back()->with('LoginError', 'Login Failed');
    }      

    public function authAdmin(Request $request) {
      $credentials = $request->validate([
        'nama' => 'required',
        'password' => 'required'
      ]);

      if (Auth::attempt($credentials) && Auth::user()->is_admin) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard')->with('LoginSuccess', 'Login Success');
      }
      return back()->withInput()->with('LoginError', 'Login Failed'); 
    }

    public function logout(Request $request){
      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect('/');
    }
  }
