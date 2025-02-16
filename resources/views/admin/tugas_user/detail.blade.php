@extends('admin.layout.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Tabel Tambah dan lihat Tugas</h1>
            <div class="ml-auto">
                <a href="{{ route('admin.tugas.user') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Kembali</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="float-right">
                                    <form action="{{ route('admin.detail.tugas.user.store') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                                        <div class="form-group mb-3">
                                            <label>Pilih Tugas</label>
                                            <select name="tugas_id" class="form-select select2">
                                                @foreach ($tugas as $item)
                                                    <option value="{{ $item->id }}" {{ old('tugas_id') == $item->id ? 'selected' : '' }}>
                                                        {{ $item->tugas }}
                                                    </option>
                                                @endforeach
                                            </select>
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
                                            <th>Tugas</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($detailtugas as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->tugas->tugas }}</td>
                                            <td>
                                                @if ($item->status == 1)
                                                <span class="badge bg-success">Selesai</span>
                                                @elseif ($item->status == 0)
                                                <span class="badge bg-warning">Belum Selesai</span>
                                                @endif
                                            </td>

                                            <td class="pt_10 pb_10">
                                                @if ($item->status == 0)
                                                <a href="{{ route('admin.detail.tugas.user.acc', $item->id) }}" title="Klik ini jika tugas selesai" class="btn btn-primary"><i class="fas fa-check"></i> selesai?</a>
                                                @endif
                                                <a href="{{ route('admin.detail.tugas.destroy', $item->id) }}" title="Hapus" class="btn btn-danger" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i> Hapus</a>
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
