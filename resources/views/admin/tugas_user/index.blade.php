@extends('admin.layout.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Tabel Tambah dan lihat Tugas User</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="float-right">
                                    <form action="{{ route('admin.tugas.user.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Masukan Foto</label>
                                            <input type="file" name="photo" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Pilih Anggota</label>
                                            <select name="user_id" class="form-select">
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                                        {{ $user->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                            <div class="input-group-append mb-3">
                                                <button class="btn btn-primary" type="submit"> Submit</button>
                                            </div>
                                    </form>
                                </div>
                                <table class="table table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>foto</th>
                                            <th>nama anggota</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($userTugas as $item)
                                        <tr>

                                            <td>{{ $loop->iteration }}</td>

                                            <td>
                                                <img src="{{ asset('uploads/'. $item->photo) }}" style="border-radius: 10%;" width="100" height="100" alt="">
                                            </td>

                                            <td>{{ $item->user->name }}</td>

                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin.detail.tugas.user', $item->id) }}" title="Lihat Tugas" class="btn btn-primary mb-2"><i class="fas fa-eye"></i> Lihat Tugas</a>
                                                <br>
                                                <a href="{{ route('admin.tugas.user.destroy', $item->id) }}" title="Hapus" class="btn btn-danger" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
