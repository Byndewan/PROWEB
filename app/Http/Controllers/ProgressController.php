<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    public function index() {
        $progress = Progress::orderBy('id', 'desc')->get();
        return view('admin.progress.index', compact('progress'));
    }

    public function create() {
        return view('admin.progress.create');
    }

    public function store(Request $request) {
        // code to store progress data
        $request->validate([
            'nama' =>'required',
            'kelas' =>'required',
            'target_anggota' =>'required',
            'progress_anggota' =>'required',
            'kesesuaian_timeline' =>'required',
        ]);

        $pro = new Progress();
        $pro->nama = $request->nama;
        $pro->kelas = $request->kelas;
        $pro->target_anggota = $request->target_anggota;
        $pro->progress_anggota = $request->progress_anggota;
        $pro->ketepatan_waktu = $request->ketepatan_waktu;
        $pro->kecepatan_pengerjaan = $request->kecepatan_pengerjaan;
        $pro->kesesuaian_timeline = $request->kesesuaian_timeline;
        $pro->kualitas_dokumen = $request->kualitas_dokumen;
        $pro->save();

        return redirect()->route('admin.progress')->with('success', 'Data berhasil disimpan');

    }

    public function edit($id) {
        $pro = Progress::where('id', $id)->first();
        return view('admin.progress.edit',compact('pro'));
    }

    public function update(Request $request, $id){

        $pros = Progress::where('id', $id)->first();

        $request->validate([
            'nama' =>'required',
            'kelas' =>'required',
        ]);

        $pros->nama = $request->nama;
        $pros->kelas = $request->kelas;
        $pros->target_anggota = $request->target_anggota;
        $pros->progress_anggota = $request->progress_anggota;
        $pros->ketepatan_waktu = $request->ketepatan_waktu;
        $pros->kecepatan_pengerjaan = $request->kecepatan_pengerjaan;
        $pros->kesesuaian_timeline = $request->kesesuaian_timeline;
        $pros->kualitas_dokumen = $request->kualitas_dokumen;
        $pros->save();

        return redirect()->route('admin.progress')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id) {
        $pro = Progress::where('id', $id)->first();
        $pro->delete();
        return redirect()->route('admin.progress')->with('success', 'Data berhasil dihapus');
    }
}
