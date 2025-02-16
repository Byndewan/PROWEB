<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        $tugas = Tugas::orderBy('id', 'asc')->get();
        return view('admin.tugas.index',compact('tugas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tugas' => 'required'
        ]);

        $tugas = new Tugas();
        $tugas->tugas = $request->tugas;
        $tugas->save();

        return redirect()->back()->with('success', 'Tugas berhasil dibuat!');
    }

    public function destroy($id)
    {
        $tugas = Tugas::find($id);
        $tugas->delete();
        return redirect()->back()->with('success', 'Tugas berhasil dihapus!');
    }
}
