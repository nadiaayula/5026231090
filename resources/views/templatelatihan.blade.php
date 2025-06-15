<!DOCTYPE html>
<html lang="en">
<head>
    <title>5026231090 - NADIA AYULA ASSYAPUTRI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font + Bootstrap -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

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

        .navbar-nav .nav-link {
            font-weight: 500;
            color: #444;
            transition: all 0.2s;
        }

        .navbar-nav .nav-link:hover {
            color: #007bff;
            font-weight: 600;
        }

        .container {
            margin-top: 1.5rem;
        }
    </style>
</head>
<body>

    <!-- Jumbotron -->
    <div class="jumbotron text-center">
        <h1>5026231090 : Nadia Ayula Assyaputri</h1>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link" href="/publish">All Front End</a></li>
            <li class="nav-item"><a class="nav-link" href="/pegawai">Pegawai</a></li>
            <li class="nav-item"><a class="nav-link" href="/makanan">Tugas CRUD</a></li>
            <li class="nav-item"><a class="nav-link" href="#">EAS</a></li>
            <li class="nav-item"><a class="nav-link" href="/latihan1">Latihan 1</a></li>
            <li class="nav-item"><a class="nav-link" href="/latihan23">Latihan 2</a></li>
            <li class="nav-item"><a class="nav-link" href="/latihan23">Latihan 3</a></li>
        </ul>
    </nav>

    <!-- Konten -->
    <div class="container">
        @yield('content')
    </div>

</body>
</html>
