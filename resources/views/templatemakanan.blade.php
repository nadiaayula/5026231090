<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Makanan - CRUD 5026231090</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font + Bootstrap -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #f6f8fc;
    }

    .jumbotron {
        background-color: #aeeeee;
        padding: 2rem 1rem;
        margin-bottom: 0;
    }

    .jumbotron h1 {
        font-size: 1.75rem;
        font-weight: 600;
        color: #222;
        margin: 0;
    }

    nav.navbar {
        background-color: #eaf6ff;
        padding: 0.75rem 1rem;
    }

    .navbar-nav .nav-item .nav-link {
        font-weight: 500;
        color: #444;
        transition: all 0.2s;
    }

    .navbar-nav .nav-item .nav-link:hover {
        color: #007bff;
        font-weight: 600;
    }

    .btn-soft {
        border: none;
        padding: 6px 14px;
        border-radius: 6px;
        font-weight: 500;
    }

    .btn-edit {
        background-color: #fff3cd;
        color: #856404;
    }

    .btn-hapus {
        background-color: #f8d7da;
        color: #721c24;
    }

    .btn-edit:hover {
        background-color: #ffe8a1;
    }

    .btn-hapus:hover {
        background-color: #f5c6cb;
    }

    .btn-primary {
        background-color: #cce0ff;
        color: #1f4e96;
        border: none;
    }

    .btn-primary:hover {
        background-color: #b3d1ff;
    }

    .badge-tersedia {
        background-color: #d4edda;
        color: #155724;
        border-radius: 999px;
        padding: 4px 12px;
        font-size: 0.85rem;
    }

    .badge-tidak {
        background-color: #f8d7da;
        color: #721c24;
        border-radius: 999px;
        padding: 4px 12px;
        font-size: 0.85rem;
    }

    .table thead th {
        background-color: #f0f0f5;
        color: #333;
        font-weight: 600;
    }

    .table td, .table th {
        vertical-align: middle !important;
    }

    .container {
        margin-top: 1.5rem;
    }
    </style>

</head>
<body>

    <div class="jumbotron text-center">
        <h1>5026231090 : Nadia Ayula Assyaputri</h1>
    </div>

    <nav class="navbar navbar-expand-sm">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link" href="/publish">All Front End</a></li>
            <li class="nav-item"><a class="nav-link" href="/pegawai">Pegawai</a></li>
            <li class="nav-item"><a class="nav-link" href="/makanan">Tugas CRUD</a></li>
            <li class="nav-item"><a class="nav-link" href="#">EAS</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Latihan 1</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Latihan 2</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Latihan 3</a></li>
        </ul>
    </nav>

    <!-- Main content -->
    <div class="container py-4">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
