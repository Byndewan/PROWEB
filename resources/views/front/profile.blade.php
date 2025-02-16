<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('dist/css/iziToast.min.css') }}">
    <script src="{{ asset('dist/js/iziToast.min.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;700&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Comfortaa', sans-serif;
            background-color: #f4f4f4;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            background: #343a40;
            color: white;
            padding-top: 20px;
        }
        .sidebar a {
            padding: 10px;
            display: block;
            color: white;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: #495057;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .parallax {
            background: url('https://source.unsplash.com/1600x900/?nature') no-repeat center center/cover;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            ccolor: #000!important;
            font-size: 2rem;
            font-weight: 900
        }
        .profile-container {
            display: flex;
            gap: 20px;
            margin-top: -50px;
        }
        .profile-card {
            flex: 1;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        }
        .profile-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>

    @include('front.layout.sidebar')

    <div class="content">
        <div class="parallax">
            Profil Pengguna
        </div>

        <div class="profile-container">
            <!-- Kiri: Tampilan Profil -->
            <div class="profile-card text-center">
                <img class="mb-5" src="{{ asset('uploads/admin.jpg') }}" alt="Foto Profil">
                <h4>Nama Pengguna</h4>
                <p>Kelas: 12 IPA</p>
                <p>Email: user@example.com</p>
                <p>Jenis Kelamin: Laki-laki</p>
                <p>Alamat: Jakarta, Indonesia</p>
                <p>Deskripsi: Siswa aktif dan berprestasi.</p>
            </div>

            <!-- Kanan: Form Edit Profil -->
            <div class="profile-card">
                <h5><strong>Edit Profil</strong></h5>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" value="Nama Pengguna">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" class="form-control" value="12 IPA">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" value="user@example.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-control">
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" value="Jakarta, Indonesia">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control">Siswa aktif dan berprestasi.</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ubah Password</label>
                        <input type="password" class="form-control" placeholder="Masukkan password baru">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                iziToast.show({
                    message: '{{ $error }}',
                    color: 'red',
                    position: 'topRight',
                });
            </script>
        @endforeach
    @endif

    @if (session('success'))
        <script>
            iziToast.show({
                message: '{{ session("success") }}',
                color: 'blue',
                position: 'topRight',
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            iziToast.show({
                message: '{{ session("error") }}',
                color: 'red',
                position: 'topRight',
            });
        </script>
    @endif

</body>
</html>
