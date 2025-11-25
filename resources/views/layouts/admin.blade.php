<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>@yield('title','Admin · Gaming Store')</title>

  <!-- AdminLTE (CDN) + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css" rel="stylesheet">

  <style>
    body { font-family: -apple-system, Segoe UI, Roboto, Arial, sans-serif; }
    .main-header { background:#ffffff; border-bottom:1px solid #e5e7eb; }
    .navbar .nav-link { color:#374151 !important; }
    .main-sidebar { background:#1f2937; }                 /* abu gelap */
    .brand-link { border-bottom:1px solid rgba(255,255,255,.1); }
    .brand-text { font-weight:600; }
    .content-wrapper { background:#f8fafc; }               /* abu sangat muda */
    .card { border:1px solid #e5e7eb; }
    .main-footer { background:#ffffff; border-top:1px solid #e5e7eb; color:#6b7280; }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Topbar -->
  <nav class="main-header navbar navbar-expand">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/') }}" class="nav-link">Beranda</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a class="nav-link" href="#"><i class="far fa-bell"></i></a></li>
      <li class="nav-item"><a class="nav-link" href="#"><i class="far fa-user"></i></a></li>
    </ul>
  </nav>

  <!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    {{-- Brand / Header Orange --}}
    <a href="{{ route('admin.dashboard') }}" class="brand-link bg-warning d-flex align-items-center">
        <span class="brand-text font-weight-bold">Dilesin</span>
        <span class="brand-text font-weight-light ml-1">Dilesin Admin</span>
    </a>

    <div class="sidebar">

        {{-- User Panel (AD Admin) --}}
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image d-flex align-items-center justify-content-center rounded-circle bg-secondary"
                 style="width: 35px; height: 35px;">
                <span class="text-white font-weight-bold">AD</span>
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        {{-- Menu --}}
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

                {{-- Dashboard --}}
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                       class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                {{-- Data Student --}}
                <li class="nav-item">
                    <a href="{{ route('admin.students.index') }}"
                       class="nav-link {{ request()->routeIs('admin.students.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Data Student</p>
                    </a>
                </li>

                {{-- Settings --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Settings</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>

  <!-- Konten -->
  <div class="content-wrapper p-3">
    @yield('content')
  </div>

  <footer class="main-footer text-center">
    <strong>&copy; {{ date('Y') }} Dilesin Academy</strong> — All rights reserved.
  </footer>

</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
@stack('scripts')
</body>
</html>
