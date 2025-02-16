@extends('admin.layout.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Tabel Tugas Yang di Hapus</h1>
            <div class="ml-auto">
                <a href="{{ route('admin.tugas') }}" title="Sampah" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
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
                                                <a href="{{ route('admin.tugas.sampah.destroy', $item->id) }}" title="Hapus" class="btn btn-danger" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i>  Hapus Permanen</a>

                                                <a href="{{ route('admin.tugas.sampah.restore', $item->id) }}" title="Restore" class="btn btn-primary"><i class="fas fa-arrows-alt-v"></i> Restore</a>
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
