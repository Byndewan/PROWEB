@extends('admin.layout.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Ubah Data</h1>
            <div class="ml-auto">
                <a href="{{ route('admin.progress') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Kembali</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.progress.edit.update',$pro->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group mb-3">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="nama" value="{{ $pro->nama }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group mb-3">
                                            <label>Kelas</label>
                                            <input type="text" class="form-control" name="kelas" value="{{ $pro->kelas }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group mb-3">
                                            <label>Target Anggota</label>
                                            <input type="text" class="form-control" name="target_anggota" value="{{ $pro->target_anggota }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group mb-3">
                                            <label>Progress Anggota</label>
                                            <input type="text" class="form-control" name="progress_anggota" value="{{ $pro->progress_anggota }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group mb-3">
                                            <label>Ketepatan Waktu</label>
                                            <input type="text" class="form-control" name="ketepatan_waktu" value="{{ $pro->ketepatan_waktu }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group mb-3">
                                            <label>Kecepatan Pengerjaan</label>
                                            <input type="text" class="form-control" name="kecepatan_pengerjaan" value="{{ $pro->kecepatan_pengerjaan }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group mb-3">
                                            <label>Kesesuaian Timeline</label>
                                            <select name="kesesuaian_timeline" class="form-select">

                                                <option value="Sesuai" @if ($pro->kesesuaian_timeline == 'Sesuai') selected @endif>Sesuai</option>

                                                <option value="Tidak_Sesuai" @if ($pro->kesesuaian_timeline == 'Tidak Sesuai') selected @endif>Tidak Sesuai</option>

                                                <option value="Lebih_Cepat" @if ($pro->kesesuaian_timeline == 'Lebih Cepat') selected @endif>Lebih Cepat</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group mb-3">
                                            <label>Kualitas Dokumen</label>
                                            <select name="kualitas_dokumen" class="form-select">

                                                <option value="1" @if ($pro->kualitas_dokumen == '1') selected @endif>1</option>
                                                <option value="2"@if ($pro->kualitas_dokumen == '2') selected @endif>2</option>
                                                <option value="3"@if ($pro->kualitas_dokumen == '3') selected @endif>3</option>
                                                <option value="4"@if ($pro->kualitas_dokumen == '4') selected @endif>4</option>
                                                <option value="5"@if ($pro->kualitas_dokumen == '5') selected @endif>5</option>
                                                <option value="6"@if ($pro->kualitas_dokumen == '6') selected @endif>6</option>
                                                <option value="7"@if ($pro->kualitas_dokumen == '7') selected @endif>7</option>
                                                <option value="8"@if ($pro->kualitas_dokumen == '8') selected @endif>8</option>
                                                <option value="9"@if ($pro->kualitas_dokumen == '9') selected @endif>9</option>
                                                <option value="10"@if ($pro->kualitas_dokumen == '10') selected @endif>10</option>

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
