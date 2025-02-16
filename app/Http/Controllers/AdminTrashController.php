<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;

class AdminTrashController extends Controller
{
    public function tugasSampah()
    {
        $tugas = Tugas::onlyTrashed()->get();
        return view('admin.sampah.tugas',compact('tugas'));
    }

    public function tugasSampahDestroy($id)
    {
        $tugas = Tugas::withTrashed()->find($id);
        $tugas->forceDelete();

        return redirect()->route('admin.tugas.sampah');
    }

    public function tugasSampahRestore($id)
    {
        $tugas = Tugas::withTrashed()->find($id);
        $tugas->restore();

        return redirect()->route('admin.tugas.sampah');
    }
}
