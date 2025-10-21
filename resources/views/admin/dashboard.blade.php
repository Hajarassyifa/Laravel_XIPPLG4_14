@extends('layouts.admin')

@section('title','Dashboard · Gaming Store')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <h1 class="mb-1">Dashboard</h1>
    <span class="text-muted">Ringkasan singkat toko game kamu</span>
  </div>
</section>

<section class="content">
  <div class="container-fluid">
    <!-- Kartu ringkas -->
    <div class="row">
      <div class="col-sm-6 col-lg-3">
        <div class="small-box bg-info">
          <div class="inner">
            <h3>1,284</h3><p>Produk Terjual</p>
          </div>
          <div class="icon"><i class="fas fa-gamepad"></i></div>
          <a href="#" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>Rp 89 jt</h3><p>Pendapatan Bulan Ini</p>
          </div>
          <div class="icon"><i class="fas fa-wallet"></i></div>
          <a href="#" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>312</h3><p>Order Pending</p>
          </div>
          <div class="icon"><i class="fas fa-shopping-cart"></i></div>
          <a href="#" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>4.7★</h3><p>Rating</p>
          </div>
          <div class="icon"><i class="fas fa-star"></i></div>
          <a href="#" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>

    <!-- Tabel sederhana -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Order Terbaru</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped mb-0">
          <thead>
            <tr>
              <th style="width: 120px">No. Order</th>
              <th>Pelanggan</th>
              <th>Item</th>
              <th style="width: 140px" class="text-right">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>#INV-1021</td><td>Raka</td><td>Elden Ring (PS5)</td><td class="text-right">Rp 320.000</td></tr>
            <tr><td>#INV-1020</td><td>Salsa</td><td>Valorant Points</td><td class="text-right">Rp 145.000</td></tr>
            <tr><td>#INV-1019</td><td>Bagas</td><td>FIFA Coins</td><td class="text-right">Rp 660.000</td></tr>
            <tr><td>#INV-1018</td><td>Nia</td><td>Genshin Top Up</td><td class="text-right">Rp 210.000</td></tr>
          </tbody>
        </table>
      </div>
      <div class="card-footer text-right">
        <a href="#" class="btn btn-sm btn-outline-secondary">Lihat semua</a>
      </div>
    </div>
  </div>
</section>
@endsection
