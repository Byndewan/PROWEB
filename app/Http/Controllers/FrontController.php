<?php

namespace App\Http\Controllers;

use App\Models\DetailTugas;
use App\Models\Progress;
use Auth;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $progress = Progress::orderBy('id', 'desc')->get();
        return view('front.index',compact('progress'));
    }

    public function dashboard(){
        $id = Auth::guard('web')->user()->id;
        $dataSelesai = DetailTugas::where('status', '1')->where('id', $id)->count();
        $dataTunda = DetailTugas::where('status', '0')->where('id', $id)->count();
        return view('front.dashboard', compact('dataSelesai', 'dataTunda'));
    }

    public function profile(){
        return view('front.profile');
    }

    public function laporan(){
        return view('front.laporan');
    }

    public function login()
    {
        return view('front.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' =>'required|email',
            'password' => 'required'
        ]);

        $check = $request->all();
        $data = [
            'email' => $check['email'],
            'password' => $check['password'],
        ];

        if (Auth::guard('web')->attempt($data)) {;
            return redirect()->route('front.dashboard')->with('success', 'Login Berhasil!');
        } else {
            return redirect()->route('front.login')->with('error', 'Informasi Login Salah!');
        }
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('front.index')->with('success', 'Logout Berhasil!');
    }
}
