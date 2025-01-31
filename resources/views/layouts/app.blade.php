<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Body dan HTML supaya mengisi penuh layar */
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #eef2f7;
            color: #333;
        }

        /* Wrapper untuk menyusun sidebar dan konten berdampingan */
        #wrapper {
            display: flex;
            height: 100%;
        }

        /* Sidebar tetap di kiri */
        #sidebar-wrapper {
            background-color: #2c3e50;
            color: #fff;
            width: 280px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            padding-top: 20px;
        }

        /* Konten utama di samping sidebar */
        #page-content-wrapper {
            margin-left: 280px; /* Menyisakan ruang untuk sidebar */
            flex: 1;
            overflow-y: auto;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        /* Navbar */
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-text {
            color: #2c3e50;
            font-weight: bold;
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 20px 0;
            text-align: center;
            width: 100%;
            position: relative;
            bottom: 0;
        }

        .list-group-item {
            background-color: #34495e;
            color: #ecf0f1;
            border: none;
        }

        .list-group-item:hover {
            background-color: #1abc9c;
            color: #fff;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4">
                <h4>Asset Management</h4>
            </div>
            <div class="list-group list-group-flush">
                @if(auth()->user()->role === 'admin')
                <a href="{{ route('kategori-asset.index') }}" class="list-group-item list-group-item-action">
                    <i class="fas fa-layer-group"></i> Kategori Asset</a>
                <a href="{{ route('sub-kategori-asset.index') }}" class="list-group-item list-group-item-action">
                    <i class="fas fa-list-alt"></i> Sub Kategori Asset</a>
                <a href="{{ route('distributor.index') }}" class="list-group-item list-group-item-action">
                    <i class="fas fa-truck"></i> Distributor</a>
                <a href="{{ route('merk.index') }}" class="list-group-item list-group-item-action">
                    <i class="fas fa-tag"></i> Merk</a>
                <a href="{{ route('satuan.index') }}" class="list-group-item list-group-item-action">
                    <i class="fas fa-balance-scale"></i> Satuan</a>
                <a href="{{ route('master-barang.index') }}" class="list-group-item list-group-item-action">
                    <i class="fas fa-boxes"></i> Master Barang</a>
                @endif
                <a href="{{ auth()->user()->role === 'admin' ? route('admin.depresiasi.index')  : route('depresiasi.index')}}" class="list-group-item list-group-item-action">
                    <i class="fas fa-calculator"></i> Depresiasi</a>
                <a href="{{ auth()->user()->role === 'admin' ? route('admin.pengadaan.index')  : route('pengadaan.index')}}" class="list-group-item list-group-item-action">
                    <i class="fas fa-shopping-cart"></i> Pengadaan</a>
                @if(auth()->user()->role === 'admin')
                <a href="{{ route('lokasi.index') }}" class="list-group-item list-group-item-action">
                    <i class="fas fa-map-marker-alt"></i> Lokasi</a>
                <a href="{{ route('mutasi-lokasi.index') }}" class="list-group-item list-group-item-action">
                    <i class="fas fa-exchange-alt"></i> Mutasi Lokasi</a>
                @endif
                <a href="{{ auth()->user()->role === 'admin' ? route('admin.opname.index')  : route('opname.index')}}" class="list-group-item list-group-item-action">
                    <i class="fas fa-clipboard-check"></i> Opname</a>
                @if(auth()->user()->role === 'admin')
                <a href="{{ route('hitung-depresiasi.index') }}" class="list-group-item list-group-item-action">
                    <i class="fas fa-chart-line"></i> Hitung Depresiasi</a>
                @endif
                <a href="#" class="list-group-item list-group-item-action text-danger"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper" class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light border-bottom">
                <div class="container-fluid">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary ms-2">Dashboard</a>
                    <span class="navbar-text ms-auto">
                        Welcome, {{ Auth::user()->name ?? 'User' }}
                    </span>
                </div>
            </nav>
            <div class="container-fluid py-4">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 IRVAN SIGMA</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
