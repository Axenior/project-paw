@extends('layouts.app')

@section('content')

<div class="container mt-3">
  <form class="d-flex" role="search">
    <input class="form-control rounded-start border-dark rounded-end-0 shadow" type="search" placeholder="Search" aria-label="Search" style="max-width: 500px">
    <button class="btn btn-outline-dark rounded-start-0 shadow" type="submit"><i class="bi bi-search"></i></button>
  </form>

  <div id="carouselExampleDark" class="carousel carousel-dark slide mt-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
      @foreach ($bestProducts as $bestProduct)
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$loop->index}}" {{$loop->first ? 'class=active aria-current=true' : ''}} aria-label="Slide {{$loop->iteration}}"></button>
      @endforeach
    </div>
    <div id="carousel" class="carousel-inner shadow rounded-5 bg-midnight-blue" style="overflow:hidden;">
      @foreach ($bestProducts as $bestProduct)
      <div class="h-100 carousel-item {{$loop->first ? 'active' : ''}}" data-bs-interval="5000">
        <div class="row h-100 w-100">
          <div class="col-5 h-100" style="overflow:hidden">
            <img src="{{asset($bestProduct->path)}}" alt="" width="100%" height="100%" style="overflow:hidden" class="h-100">
          </div>
          <div class="col-7 h-100 text-white d-flex align-items-center p-0">
            <div class="p-1">
              <span class="d-block">Best Product For {{ucwords($bestProduct->category)}}</span>
              <h5 class="mt-3">{{$bestProduct->name}}</h5>
              <span class="d-block mt-3">{{ implode(' ', array_slice(explode(' ', $bestProduct->description), 0, 20)) }} ...</span>
              <a href="{{ route('product.detail', $bestProduct->id) }}" class="dc-none py-2 px-3 bg-light-steel-blue midnight-blue d-inline-block rounded-5 mt-4">BELI SEKARANG</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
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

  @if ($maxDiscount != 0)
  <div class="my-5 bg-cucumber-water p-3 rounded-5 shadow">
    <h4 class="light-blue text-center mb-2">AKHIR BULAN MAKIN UNTUNG</h4>
    <div class="text-center">
      <h5 class="d-inline-block rounded-5 bg-danger p-2 light-blue mb-2 mx-auto small">Dapatkan diskon hingga {{$maxDiscount}}%</h5>
    </div>
    <div class="row g-2">
      @foreach ($discountProducts as $discountProduct)
      <div class="col-6 col-md-4 col-lg-3">
        <a href="{{ route('product.detail', $discountProduct->id) }}" class="dc-none card p-2 rounded-4 shadow">
          <img src="{{asset($discountProduct->path)}}" class="product card-img-top border-dark rounded-3" alt="...">
          <div class="card-body px-0 pt-2 pb-0">
            <h5 class="">{{$discountProduct->name}}</h5>
            <h5 class="">Rp{{number_format(($discountProduct->price) - ($discountProduct->discount * $discountProduct->price / 100), 2, ',', '.')}}</h5>
            <p class=""><span class="text-danger">{{$discountProduct->discount}}%</span> <s>Rp{{number_format($discountProduct->price, 2, ',', '.')}}</s></p>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
  @endif

  <div class="mb-5">
    <h4>Kategori</h4>
    <div class="row g-2">
      <div class="col-6 col-md-4">
        <a href="{{ route('product.category', 'smartphone') }}" class="dc-none bg-sea-salt rounded-4 d-flex align-items-center" style="height: 95px">
          <h4 class="m-auto light-blue">SMARTPHONE</h4>
        </a>
      </div>
      <div class="col-6 col-md-4">
        <a href="{{ route('product.category', 'laptop') }}" class="dc-none bg-vital-ocean rounded-4 d-flex align-items-center" style="height: 95px">
          <h4 class="m-auto light-blue">LAPTOP</h4>
        </a>
      </div>
      <div class="col-6 col-md-4">
        <a href="{{ route('product.category', 'tablet') }}" class="dc-none bg-aqua-spray rounded-4 d-flex align-items-center" style="height: 95px">
          <h4 class="m-auto light-blue">TABLET</h4>
        </a>
      </div>
    </div>
  </div>

  <div class="mb-5">
    <h4>Produk Terbaru</h4>
    <div class="row g-2">
      @foreach ($latestProducts as $latestProduct)
      <a href="{{ route('product.detail', $latestProduct->id) }}" class="dc-none col-4 col-md-3 col-lg-2">
        <div class="card p-2 rounded-4 shadow">
          <img src="{{asset($latestProduct->path)}}" class="product card-img-top border-dark rounded-3" alt="...">
          <div class="card-body px-0 pt-2 pb-0">
            <p class="m-0">{{$latestProduct->name}}</p>
            <p class="m-0">Rp{{number_format(($latestProduct->price) - ($latestProduct->discount * $latestProduct->price / 100), 2, ',', '.')}}</p>
            @if ($latestProduct->discount != 0)
            <p class=""><span class="text-danger">{{$latestProduct->discount}}%</span> <s>Rp{{number_format($latestProduct->price, 2, ',', '.')}}</s></p>
            @endif
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</div>
@endsection