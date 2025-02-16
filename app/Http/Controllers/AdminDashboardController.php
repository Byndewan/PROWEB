<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(){
        $tugas = Tugas::count();
        $data = User::count();
        return view('admin.dashboard.index',compact('data','tugas'));
    }
}
