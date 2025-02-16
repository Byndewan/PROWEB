<?php

namespace App\Http\Controllers;

use App\Models\DetailTugas;
use App\Models\Tugas;
use App\Models\TugasUser;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TugasUserController extends Controller
{
    public function index()
    {
        $userTugas = TugasUser::with('user')->orderBy('id', 'asc')->get();

        $users = User::orderBy('name')->get();
        return view('admin.tugas_user.index', compact('userTugas','users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id|unique:tugas_users,user_id'
        ]);

        $final_name = 'user_' . time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('uploads/'), $final_name);

        $tugas = new TugasUser();
        $tugas->photo = $final_name;
        $tugas->user_id = $request->user_id;
        $tugas->save();

        return redirect()->back()->with('success', 'Tugas User berhasil dibuat');
    }

    public function destroy($id)
    {
        $tugas = TugasUser::find($id);
        $tugas->delete();

        return redirect()->back()->with('success', 'Tugas User berhasil dihapus');
    }

    public function detail($id)
    {

        $user = User::with('detailtugas')->where('id', $id)->first();

        $detailtugas = DetailTugas::where('user_id', $id)->get();

        // $detailtugas = DetailTugas::with('tugas','user')->where('id', $id)->get();

        $tugas = Tugas::orderBy('id')->get();
        return view('admin.tugas_user.detail',compact('tugas','detailtugas','user'));
    }

    public function detailStore(Request $request)
    {

        $request->validate([
            'tugas_id' => [
                'required',
                Rule::unique('detail_tugas')->where(function ($query) use ($request) {
                    return $query->where('user_id', $request->user_id);
                }),
            ],
        ]);


        $obj = new DetailTugas();
        $obj->user_id = $request->user_id;
        $obj->tugas_id = $request->tugas_id;
        $obj->status = 0;
        $obj->save();

        return redirect()->back()->with('success', 'Tugas berhasil di tambahkan!');
    }

    public function detailTugasAcc($id)
    {
        DetailTugas::where('id', $id)->update(['status' => '1']);
        return redirect()->back()->with('success', 'Tugas sudah di selesaikan!');
    }

    public function detaildestroy($id)
    {
        $tugas = DetailTugas::find($id);
        $tugas->delete();

        return redirect()->back()->with('success', 'Tugas berhasil dihapus!');
    }
}
