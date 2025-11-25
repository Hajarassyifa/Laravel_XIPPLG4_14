@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard Admin</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">

      {{-- Card sambutan --}}
      <div class="row">
        <div class="col-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Selamat Datang 👋</h3>
            </div>
            <div class="card-body">
              <p class="mb-1">
                Selamat datang di panel admin <b>Dilesin Academy</b>.
              </p>
              <p class="mb-0 text-muted">
                Gunakan dashboard ini untuk mengelola data pengguna, kelas, dan konten dengan lebih mudah.
              </p>
            </div>
          </div>
        </div>
      </div>

      {{-- Card ringkasan (contoh stat dummy, nanti bisa diisi data dinamis) --}}
      <div class="row">
        <div class="col-md-4 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-info">
              <i class="fas fa-users"></i>
            </span>

            <div class="info-box-content">
              <span class="info-box-text">Total Siswa</span>
              <span class="info-box-number">120</span>
              <span class="text-muted" style="font-size: 12px;">(contoh data)</span>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-success">
              <i class="fas fa-chalkboard-teacher"></i>
            </span>

            <div class="info-box-content">
              <span class="info-box-text">Total Kelas</span>
              <span class="info-box-number">8</span>
              <span class="text-muted" style="font-size: 12px;">(contoh data)</span>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-warning">
              <i class="fas fa-book-open"></i>
            </span>

            <div class="info-box-content">
              <span class="info-box-text">Modul Aktif</span>
              <span class="info-box-number">24</span>
              <span class="text-muted" style="font-size: 12px;">(contoh data)</span>
            </div>
          </div>
        </div>
      </div>

      {{-- Bagian bawah untuk konten berikutnya --}}
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">Aktivitas Terbaru</h3>
            </div>
            <div class="card-body">
              <p class="text-muted mb-0">
                Belum ada aktivitas terbaru. Tambahkan log atau integrasikan dengan data sistem nanti.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">Catatan Admin</h3>
            </div>
            <div class="card-body">
              <ul class="mb-0">
                <li>Cek dan update data siswa secara berkala.</li>
                <li>Pastikan jadwal kelas sudah sesuai.</li>
                <li>Review materi sebelum dipublikasikan.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection
