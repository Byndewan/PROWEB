<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function login() {
        return view('admin.auth.login');
    }

    public function authenticate(Request $request){

        $request->validate([
            'email' =>'required|email',
            'password' => 'required'
        ]);

        $check = $request->all();
        $data = [
            'email' => $check['email'],
            'password' => $check['password'],
        ];

        if (Auth::guard('admin')->attempt($data)) {;
            return redirect()->route('admin.dashboard')->with('success', 'Login Berhasil!');
        } else {
            return redirect()->route('admin.login')->with('error', 'Informasi Login Salah!');
        }
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Logout Berhasil!');
    }
}
