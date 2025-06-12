<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Makanan - Tugas CRUD 5026231090</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f6f8fc;
        }

        h3 {
            font-weight: 600;
            color: #333;
        }

        .btn-soft {
            border: none;
            padding: 6px 14px;
            border-radius: 6px;
            font-weight: 500;
        }

        .btn-edit {
            background-color: #d6ccff;
            color: #5138ee;
        }

        .btn-hapus {
            background-color: #ffd6d6;
            color: #d62828;
        }

        .btn-edit:hover {
            background-color: #c4b8ff;
        }

        .btn-hapus:hover {
            background-color: #ffc3c3;
        }

        .btn-primary {
            background-color: #cce0ff;
            color: #1f4e96;
            border: none;
        }

        .btn-primary:hover {
            background-color: #b3d1ff;
        }

        .btn-outline-secondary {
            background-color: #f0f4f8;
            color: #333;
            border-color: #ddd;
        }

        .btn-outline-secondary:hover {
            background-color: #e2e6ea;
        }

        .badge-tersedia {
            background-color: #b2f2bb;
            color: #155724;
            border-radius: 999px;
            padding: 4px 12px;
            font-size: 0.85rem;
        }

        .badge-tidak {
            background-color: #ffe066;
            color: #856404;
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
    </style>
</head>
<body>

<div class="container py-4">
    @yield('content')
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
