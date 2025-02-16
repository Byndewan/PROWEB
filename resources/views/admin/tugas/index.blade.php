@extends('admin.layout.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Tabel Tambah dan lihat Data</h1>
            <div class="ml-auto">
                <a href="{{ route('admin.tugas.sampah') }}" title="Sampah" class="btn btn-primary"><i class="fas fa-trash"></i> Sampah</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="float-right">
                                    <form action="{{ route('admin.tugas.store') }}" method="post">
                                        @csrf
                                        <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label>Tambah Tugas</label>
                                            <input type="text" class="form-control" name="tugas">
                                        </div>
                                            <div class="input-group-append mb-3">
                                                <button class="btn btn-primary" type="submit"> Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <table class="table table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Tugas</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tugas as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->tugas }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin.tugas.destroy', $item->id) }}" title="Hapus" class="btn btn-danger" onClick="return confirm('Tugas akan di pindahkan ke sampah, apakah anda yakin?');"><i class="fas fa-trash"></i></a>
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
