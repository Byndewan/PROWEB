<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <link rel="stylesheet" href="{{ asset('dist/css/iziToast.min.css') }}">
    <script src="{{ asset('dist/js/iziToast.min.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Comfortaa', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
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
            display: block;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: #495057;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
        .hero {
            height: 400px;
            background: url('/uploads/2.jpg') no-repeat center center/cover;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        .hero h1, .hero p {
            position: relative;
            z-index: 2;
        }
        .stats {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            text-align: center;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
        }
        .activity-feed {
            margin-top: 30px;
        }

        .navbar-bg {
        content: ' ';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 115px;
        background-color: #495057;
        z-index: -1;
        height: 70px;
        }

    </style>
</head>
<body>

    @include('front.layout.sidebar')

    <div class="content">
        <div class="hero">
            <div>
                <h1>Selamat Datang, {{ Auth::guard('web')->user()->name
                 }}!</h1>
                <p>Pantau dan kelola progress tugasmu dengan mudah.</p>
            </div>
        </div>

        <div class="stats container">
            <div class="card col-md-3 bg-primary text-white">
                <h3>📈 85</h3>
                <p>Progress Keseluruhan</p>
            </div>
            <div class="card col-md-3 bg-success text-white">
                <h3>📝 {{ $dataSelesai }}</h3>
                <p>Tugas Selesai</p>
            </div>
            <div class="card col-md-3 bg-warning text-white">
                <h3>⏳ {{ $dataTunda }}</h3>
                <p>Tugas Tertunda</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
