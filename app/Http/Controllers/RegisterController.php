<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
      return view('register.index', [
        'title' => 'register'
      ]);
    }

    public function store(Request $request){
      // dd($request);
      $validated = $request->validate([
        'nama' => 'required|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|max:16'
      ]);

      // dd('registrasi berhasil');
      $validated['password'] = Hash::make($validated['password']);

      User::create($validated);

      return redirect('/login')->with('success', 'Registration success, Plese Login !');
    }
}
