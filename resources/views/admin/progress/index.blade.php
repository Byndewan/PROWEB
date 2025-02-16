@extends('admin.layout.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Tabel Data</h1>
            <div class="ml-auto">
                <a href="{{ route('admin.progress.create') }}" title="Tambah Data" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Target Progress</th>
                                            <th>Progress Anggota</th>
                                            <th>Kesesuaian Timeline</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($progress as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->kelas }}</td>
                                            <td>{{ $item->target_anggota }}</td>
                                            <td>
                                                @if ($item->progress_anggota == 'Video 111')
                                                <span class="badge bg-success"> Selesai</span>
                                                @else
                                                <span>{{ $item->progress_anggota }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->kesesuaian_timeline == 'Sesuai')
                                                <span class="badge bg-success">Sesuai</span>
                                                @elseif ($item->kesesuaian_timeline == 'Tidak Sesuai')
                                                <span class="badge bg-danger">Tidak Sesuai</span>
                                                @endif
                                            </td>
                                            <td class="pt_10 pb_10">
                                                <a href="" title="Detail" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_{{ $loop->iteration }}"><i class="fas fa-eye"></i></a>
                                                <a href="{{ route('admin.progress.edit', $item->id) }}" title="Edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('admin.progress.destroy', $item->id) }}" title="Hapus" class="btn btn-danger" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
                                            </td>
                                            <div class="modal fade" id="modal_{{ $loop->iteration }}" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Detail</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group row bdb1 pt_10 mb_0">

                                                                <div class="col-md-4"><label class="form-label">Nama</label></div>
                                                                <div class="col-md-8">{{ $item->nama }}</div><br>

                                                                <div class="col-md-4"><label class="form-label">Kelas</label></div>
                                                                <div class="col-md-8">{{ $item->kelas }}</div><br>

                                                                <div class="col-md-4"><label class="form-label">Target Progress</label></div>
                                                                <div class="col-md-8">{{ $item->target_anggota }}</div><br>

                                                                <div class="col-md-4"><label class="form-label">Progress Anggota</label></div>
                                                                <div class="col-md-8">{{ $item->progress_anggota }}</div><br>

                                                                <div class="col-md-4"><label class="form-label">Ketepatan Waktu</label></div>
                                                                <div class="col-md-8">{{ $item->ketepatan_waktu }}</div><br>

                                                                <div class="col-md-4"><label class="form-label">Kecepatan Pengerjaan</label></div>
                                                                <div class="col-md-8">{{ $item->kecepatan_pengerjaan }}</div><br>

                                                                <div class="col-md-4"><label class="form-label">Kesesuaian Timeline</label></div>
                                                                <div class="col-md-8">{{ $item->kesesuaian_timeline }}</div><br>

                                                                <div class="col-md-4"><label class="form-label">Kualitas Dokumen</label></div>
                                                                <div class="col-md-8">{{ $item->kualitas_dokumen }}</div><br>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
