<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PLN Stabat')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Latar belakang putih keabu-abuan */
            min-height: 100vh; /* Tinggi minimal penuh layar */
            display: flex;
            flex-direction: column;
        }
        .sidebar {
            height: 100vh; /* Tinggi penuh */
            background-color: #007bff; /* Biru */
            color: white; /* Teks putih */
        }
        .sidebar a {
            color: white; /* Link berwarna putih */
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #0056b3; /* Biru lebih gelap saat hover */
        }
        .footer-custom {
            background-color: #0056b3; /* Warna gelap */
            color: white;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-grow-1">
        <!-- Sidebar -->
        <div class="sidebar p-3">
            <h4>Menu</h4>
            <a href="{{ route('golongan.index') }}">Daftar Golongan</a>
            <a href="{{ route('pelanggan.index') }}">Daftar Pelanggan</a>
            <a href="{{ route('users.index') }}">Daftar Users</a>
            <a href="#">Keluar</a>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1 p-4">
            <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">PLN Stabat</a>
                </div>
            </nav>
            <div class="container mt-4">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-custom text-center py-3">
        <p>&copy; {{ date('Y') }} PLN Stabat. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>