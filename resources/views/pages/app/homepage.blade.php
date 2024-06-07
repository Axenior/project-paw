@extends('layouts.app')

@section('content')

<div class="container mt-3">
  <form class="d-flex" role="search">
    <input class="form-control rounded-start border-dark rounded-end-0 shadow" type="search" placeholder="Search" aria-label="Search" style="max-width: 500px">
    <button class="btn btn-outline-dark rounded-start-0 shadow" type="submit"><i class="bi bi-search"></i></button>
  </form>

  <div id="carouselExampleDark" class="carousel carousel-dark slide mt-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div id="carousel" class="carousel-inner shadow rounded-5 bg-midnight-blue" style="overflow:hidden;">
      <div class="h-100 carousel-item active" data-bs-interval="5000">
        <div class="row h-100 w-100">
          <div class="col-5 h-100" style="overflow:hidden">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=1699&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" width="100%" height="100%" style="overflow:hidden" class="h-100">
          </div>
          <div class="col-7 h-100 text-white d-flex align-items-center p-0">
            <div class="p-1">
              <span class="d-block">Best Product For Music Enthusiast</span>
              <h5 class="mt-3">LOGITECH Stereo Headset H111</h5>
              <span class="d-block mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam reiciendis quae quis aliquid recusandae harum!</span>
              <a href="/detail" class="dc-none py-2 px-3 bg-light-steel-blue midnight-blue d-inline-block rounded-5 mt-4">BELI SEKARANG</a>
            </div>
          </div>
        </div>
      </div>
      <div class="h-100 carousel-item" data-bs-interval="5000">
        <div class="row h-100 w-100">
          <div class="col-5 h-100" style="overflow:hidden">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=1699&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" width="100%" height="100%" style="overflow:hidden" class="h-100">
          </div>
          <div class="col-7 h-100 text-white d-flex align-items-center p-0">
            <div class="p-1">
              <span class="d-block">Best Product For Music Enthusiast</span>
              <h5 class="mt-3">LOGITECH Stereo Headset H111</h5>
              <span class="d-block mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam reiciendis quae quis aliquid recusandae harum!</span>
              <a href="/detail" class="dc-none py-2 px-3 bg-light-steel-blue midnight-blue d-inline-block rounded-5 mt-4">BELI SEKARANG</a>
            </div>
          </div>
        </div>
      </div>
      <div class="h-100 carousel-item" data-bs-interval="5000">
        <div class="row h-100 w-100">
          <div class="col-5 h-100" style="overflow:hidden">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=1699&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" width="100%" height="100%" style="overflow:hidden" class="h-100">
          </div>
          <div class="col-7 h-100 text-white d-flex align-items-center p-0">
            <div class="p-1">
              <span class="d-block">Best Product For Music Enthusiast</span>
              <h5 class="mt-3">LOGITECH Stereo Headset H111</h5>
              <span class="d-block mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam reiciendis quae quis aliquid recusandae harum!</span>
              <a href="/detail" class="dc-none py-2 px-3 bg-light-steel-blue midnight-blue d-inline-block rounded-5 mt-4">BELI SEKARANG</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="my-5 bg-cucumber-water p-3 rounded-5 shadow">
    <h4 class="light-blue text-center mb-2">AKHIR TAHUN MAKIN UNTUNG</h4>
    <div class="text-center">
      <h5 class="d-inline-block rounded-5 bg-danger p-2 light-blue mb-2 mx-auto small">Dapatkan diskon hingga 80%</h5>
    </div>
    <div class="row g-2">
      <div class="col-6 col-md-4 col-lg-3">
        <a href="/detail" class="dc-none card p-2 rounded-4 shadow">
          <img src="https://images.unsplash.com/photo-1583394838336-acd977736f90?q=80&w=1584&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="product card-img-top border-dark rounded-3" alt="...">
          <div class="card-body px-0 pt-2 pb-0">
            <h5 class="">Samsung Galaxy A23</h5>
            <h5 class="">Rp1.610.000,00</h5>
            <p class=""><span class="text-danger">30%</span> <s>Rp2.300.000,00</s></p>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <a href="/detail" class="dc-none card p-2 rounded-4 shadow">
          <img src="https://plus.unsplash.com/premium_photo-1670537994863-5ad53a3214e0?q=80&w=1635&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="product card-img-top border-dark rounded-3" alt="...">
          <div class="card-body px-0 pt-2 pb-0">
            <h5 class="">Xiaomi 12T Pro</h5>
            <h5 class="">Rp1.300.000,00</h5>
            <p class=""><span class="text-danger">80%</span> <s>Rp6.500.000,00</s></p>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <a href="/detail" class="dc-none card p-2 rounded-4 shadow">
          <img src="https://images.unsplash.com/photo-1583394838336-acd977736f90?q=80&w=1584&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="product card-img-top border-dark rounded-3" alt="...">
          <div class="card-body px-0 pt-2 pb-0">
            <h5 class="">Samsung Galaxy A23</h5>
            <h5 class="">Rp800.000,00</h5>
            <p class=""><span class="text-danger">60%</span> <s>Rp2.000.000,00</s></p>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <a href="/detail" class="dc-none card p-2 rounded-4 shadow">
          <img src="https://plus.unsplash.com/premium_photo-1670537994863-5ad53a3214e0?q=80&w=1635&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="product card-img-top border-dark rounded-3" alt="...">
          <div class="card-body px-0 pt-2 pb-0">
            <h5 class="">Samsung Galaxy A23</h5>
            <h5 class="">Rp1.200.000,00</h5>
            <p class=""><span class="text-danger">70%</span> <s>Rp4.000.000,00</s></p>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="mb-5">
    <h4>Kategori</h4>
    <div class="row g-2">
      <div class="col-6 col-md-4">
        <a href="/smartphone" class="dc-none bg-sea-salt rounded-4 d-flex align-items-center" style="height: 95px">
          <h4 class="m-auto light-blue">SMARTPHONE</h4>
        </a>
      </div>
      <div class="col-6 col-md-4">
        <a href="/laptop" class="dc-none bg-vital-ocean rounded-4 d-flex align-items-center" style="height: 95px">
          <h4 class="m-auto light-blue">LAPTOP</h4>
        </a>
      </div>
      <div class="col-6 col-md-4">
        <a href="/tablet" class="dc-none bg-aqua-spray rounded-4 d-flex align-items-center" style="height: 95px">
          <h4 class="m-auto light-blue">TABLET</h4>
        </a>
      </div>
    </div>
  </div>

  <div class="mb-5">
    <h4>Produk Terbaru</h4>
    <div class="row g-2">
      <a href="/detail" class="dc-none col-4 col-md-3 col-lg-2">
        <div class="card p-2 rounded-4 shadow">
          <img src="https://plus.unsplash.com/premium_photo-1670537994863-5ad53a3214e0?q=80&w=1635&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="product card-img-top border-dark rounded-3" alt="...">
          <div class="card-body px-0 pt-2 pb-0">
            <p class="m-0">Samsung Galaxy A23</p>
            <p class="m-0">Rp1.200.000,00</p>
            <p class="m-0"><span class="text-danger">70%</span> <s>Rp4.000.000,00</s></p>
          </div>
        </div>
      </a>
      <a href="/detail" class="dc-none col-4 col-md-3 col-lg-2">
        <div class="card p-2 rounded-4 shadow">
          <img src="https://plus.unsplash.com/premium_photo-1670537994863-5ad53a3214e0?q=80&w=1635&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="product card-img-top border-dark rounded-3" alt="...">
          <div class="card-body px-0 pt-2 pb-0">
            <p class="m-0">Samsung Galaxy A23</p>
            <p class="m-0">Rp1.200.000,00</p>
          </div>
        </div>
      </a>
      <a href="/detail" class="dc-none col-4 col-md-3 col-lg-2">
        <div class="card p-2 rounded-4 shadow">
          <img src="https://plus.unsplash.com/premium_photo-1670537994863-5ad53a3214e0?q=80&w=1635&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="product card-img-top border-dark rounded-3" alt="...">
          <div class="card-body px-0 pt-2 pb-0">
            <p class="m-0">Samsung Galaxy A23</p>
            <p class="m-0">Rp1.200.000,00</p>
          </div>
        </div>
      </a>
      <a href="/detail" class="dc-none col-4 col-md-3 col-lg-2">
        <div class="card p-2 rounded-4 shadow">
          <img src="https://plus.unsplash.com/premium_photo-1670537994863-5ad53a3214e0?q=80&w=1635&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="product card-img-top border-dark rounded-3" alt="...">
          <div class="card-body px-0 pt-2 pb-0">
            <p class="m-0">Samsung Galaxy A23</p>
            <p class="m-0">Rp1.200.000,00</p>
            <p class="m-0"><span class="text-danger">70%</span> <s>Rp4.000.000,00</s></p>
          </div>
        </div>
      </a>
      <a href="/detail" class="dc-none col-4 col-md-3 col-lg-2">
        <div class="card p-2 rounded-4 shadow">
          <img src="https://plus.unsplash.com/premium_photo-1670537994863-5ad53a3214e0?q=80&w=1635&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="product card-img-top border-dark rounded-3" alt="...">
          <div class="card-body px-0 pt-2 pb-0">
            <p class="m-0">Samsung Galaxy A23</p>
            <p class="m-0">Rp1.200.000,00</p>
          </div>
        </div>
      </a>
      <a href="/detail" class="dc-none col-4 col-md-3 col-lg-2">
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
</div>
@endsection