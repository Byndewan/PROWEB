@extends('admin.layout.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Tambah Data</h1>
            <div class="ml-auto">
                <a href="{{ route('admin.progress') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Kembali</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.progress.create.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group mb-3">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="nama" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group mb-3">
                                            <label>Kelas</label>
                                            <input type="text" class="form-control" name="kelas" value="11 Rpl ">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group mb-3">
                                            <label>Target Anggota</label>
                                            <input type="text" class="form-control" name="target_anggota" value="Video ">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group mb-3">
                                            <label>Progress Anggota</label>
                                            <input type="text" class="form-control" name="progress_anggota" value="Video ">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group mb-3">
                                            <label>Ketepatan Waktu</label>
                                            <input type="text" class="form-control" name="ketepatan_waktu" value="%">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group mb-3">
                                            <label>Kecepatan Pengerjaan</label>
                                            <input type="text" class="form-control" name="kecepatan_pengerjaan" value="%">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group mb-3">
                                            <label>Kesesuaian Timeline</label>
                                            <select name="kesesuaian_timeline" class="form-select">
                                                <option value="Sesuai">Sesuai</option>
                                                <option value="Tidak Sesuai">Tidak Sesuai</option>
                                                <option value="Lebih Cepat">Lebih Cepat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group mb-3">
                                            <label>Kualitas Dokumen</label>
                                            <select name="kualitas_dokumen" class="form-select">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>

                                    </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
