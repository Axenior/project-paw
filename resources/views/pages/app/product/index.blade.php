@extends('layouts.app')

@section('content')
<div class="container">
  <div class="my-3">
    <h4>Kategori</h4>
    <div class="row g-2">
      <div class="col-6 col-md-4">
        <a href="/smartphone" class="dc-none bg-sea-salt {{$product == 'Smartphone' ? 'bg-sea-salt-active' : ''}} rounded-4 d-flex align-items-center" style="height: 95px">
          <h4 class="m-auto light-blue">SMARTPHONE</h4>
        </a>
      </div>
      <div class="col-6 col-md-4">
        <a href="/laptop" class="dc-none bg-vital-ocean {{$product == 'Laptop' ? 'bg-vital-ocean-active' : ''}} rounded-4 d-flex align-items-center" style="height: 95px">
          <h4 class="m-auto light-blue">LAPTOP</h4>
        </a>
      </div>
      <div class="col-6 col-md-4">
        <a href="/tablet" class="dc-none bg-aqua-spray {{$product == 'Tablet' ? 'bg-aqua-spray-active' : ''}} rounded-4 d-flex align-items-center" style="height: 95px">
          <h4 class="m-auto light-blue">TABLET</h4>
        </a>
      </div>
    </div>
  </div>

  <div class="mb-5">
    <h4>Produk {{$product}}</h4>
    <div class="row g-2">
      <a href="" class="dc-none col-4 col-lg-3">
        <div class="card p-2 rounded-4 shadow">
          <img src="https://plus.unsplash.com/premium_photo-1670537994863-5ad53a3214e0?q=80&w=1635&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="product card-img-top border-dark rounded-3" alt="...">
          <div class="card-body px-0 pt-2 pb-0">
            <p class="m-0">Samsung Galaxy A23</p>
            <p class="m-0">Rp1.200.000,00</p>
            <p class="m-0"><span class="text-danger">70%</span> <s>Rp4.000.000,00</s></p>
          </div>
        </div>
      </a>
      <a href="" class="dc-none col-4 col-lg-3">
        <div class="card p-2 rounded-4 shadow">
          <img src="https://plus.unsplash.com/premium_photo-1670537994863-5ad53a3214e0?q=80&w=1635&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="product card-img-top border-dark rounded-3" alt="...">
          <div class="card-body px-0 pt-2 pb-0">
            <p class="m-0">Samsung Galaxy A23</p>
            <p class="m-0">Rp1.200.000,00</p>
          </div>
        </div>
      </a>
      <a href="" class="dc-none col-4 col-lg-3">
        <div class="card p-2 rounded-4 shadow">
          <img src="https://plus.unsplash.com/premium_photo-1670537994863-5ad53a3214e0?q=80&w=1635&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="product card-img-top border-dark rounded-3" alt="...">
          <div class="card-body px-0 pt-2 pb-0">
            <p class="m-0">Samsung Galaxy A23</p>
            <p class="m-0">Rp1.200.000,00</p>
          </div>
        </div>
      </a>
      <a href="" class="dc-none col-4 col-lg-3">
        <div class="card p-2 rounded-4 shadow">
          <img src="https://plus.unsplash.com/premium_photo-1670537994863-5ad53a3214e0?q=80&w=1635&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="product card-img-top border-dark rounded-3" alt="...">
          <div class="card-body px-0 pt-2 pb-0">
            <p class="m-0">Samsung Galaxy A23</p>
            <p class="m-0">Rp1.200.000,00</p>
            <p class="m-0"><span class="text-danger">70%</span> <s>Rp4.000.000,00</s></p>
          </div>
        </div>
      </a>
      <a href="" class="dc-none col-4 col-lg-3">
        <div class="card p-2 rounded-4 shadow">
          <img src="https://plus.unsplash.com/premium_photo-1670537994863-5ad53a3214e0?q=80&w=1635&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="product card-img-top border-dark rounded-3" alt="...">
          <div class="card-body px-0 pt-2 pb-0">
            <p class="m-0">Samsung Galaxy A23</p>
            <p class="m-0">Rp1.200.000,00</p>
          </div>
        </div>
      </a>
      <a href="" class="dc-none col-4 col-lg-3">
        <div class="card p-2 rounded-4 shadow">
          <img src="https://plus.unsplash.com/premium_photo-1670537994863-5ad53a3214e0?q=80&w=1635&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="product card-img-top border-dark rounded-3" alt="...">
          <div class="card-body px-0 pt-2 pb-0">
            <p class="m-0">Samsung Galaxy A23</p>
            <p class="m-0">Rp1.200.000,00</p>
          </div>
        </div>
      </a>
    </div>
  </div>

  <a href="/homepage" class="dc-none py-2 px-4 bg-midnight-blue light-blue rounded-5 fw-bold">Kembali</a>
</div>
@endsection