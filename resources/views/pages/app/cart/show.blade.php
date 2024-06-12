@extends('layouts.app')

@section('content')
    <div class="container my-4" style="min-height: 74.2vh">
      <div class="row g-2">
        <div class="col col-12 col-md-6">
          <img src="https://plus.unsplash.com/premium_photo-1670537994863-5ad53a3214e0?q=80&w=1635&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="product card-img-top border-dark rounded-3" alt="...">
        </div>
        <div class="col col-12 col-md-6">
          <p>Home > Samsung Galaxy S23</p>
          <h4>Samsung Galaxy S23 5G</h4>
          <p>Rp.1.610.000,00</p>
          <p><span class="text-danger">20%</span> <s>Rp2.300.000,00</s></p>
          <div class="row">
            <div class="col">
              <p>Memori</p>
            </div>
            <div class="col">
              <p class="border border-3 rounded px-2 border-primary text-primary" style="width: fit-content">6/128 GB</p>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p>Garansi</p>
            </div>
            <div class="col">
              <p>1 Tahun</p>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col d-flex my-auto">
              <h5 class="d-flex my-auto">Jumlah</h5>
            </div>
            <div class="col">
              <input class="form-control border-primary" type="number" value="1" style="max-width: 80px" min="1">
            </div>
          </div>
          <div class="row mt-4">
            <div class="col">
              <h5>Total</h5>
            </div>
            <div class="col">
              <h5>Rp2.200.000,00</h5>
            </div>
          </div>
          <a href="" class="d-block dc-none rounded-5 p-2 bg-midnight-blue light-blue text-center my-2">BELI SEKARANG</a>
          <a href="" class="d-block dc-none rounded-5 p-2 bg-steel-blue light-blue text-center my-2">TAMBAH KE KERANJANG</a>
          <button onclick="history.back()" class="d-block dc-none rounded-5 p-2 bg-steel-blue light-blue text-center my-2 w-100">KEMBALI</button>
      </div>
      <h5 class="mt-2">Deskripsi</h5>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nihil praesentium debitis perferendis repellat odio, consequuntur totam repudiandae ipsam fuga facere tenetur aut? Perspiciatis, quidem.</p>
    </div>
@endsection