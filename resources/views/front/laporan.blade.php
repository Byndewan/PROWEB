<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('dist/css/iziToast.min.css') }}">
    <script src="{{ asset('dist/js/iziToast.min.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;700&display=swap" rel="stylesheet">
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
        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }
    </style>
</head>
<body>

    @include('front.layout.sidebar')

    <!-- Content -->
    <div class="content">
        <h2 class="text-center">Laporan Progress</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>SL</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Target Progress</th>
                    <th>Progress Anggota</th>
                    <th>Kesesuaian Timeline</th>
                    <th>Kualitas Dokumen</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>10A</td>
                    <td>80%</td>
                    <td>75%</td>
                    <td>On Time</td>
                    <td>Baik</td>
                    <td>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#detailModal">
                            <i class="fas fa-eye"></i> Detail
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modal Detail -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Progress</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Nama:</strong> John Doe</p>
                    <p><strong>Kelas:</strong> 10A</p>
                    <p><strong>Target Progress:</strong> 80%</p>
                    <p><strong>Progress Anggota:</strong> 75%</p>
                    <p><strong>Kesesuaian Timeline:</strong> On Time</p>
                    <p><strong>Kualitas Dokumen:</strong> Baik</p>
                </div>
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
