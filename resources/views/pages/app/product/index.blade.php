@extends('layouts.app')

@section('content')
<div class="container">
  <div class="my-3">
    <h4>Kategori</h4>
    <div class="row g-2">
      <div class="col-6 col-md-4">
        <a href="{{ route('product.category', 'smartphone') }}" class="dc-none bg-sea-salt {{$category == 'smartphone' ? 'bg-sea-salt-active' : ''}} rounded-4 d-flex align-items-center" style="height: 95px">
          <h4 class="m-auto light-blue">SMARTPHONE</h4>
        </a>
      </div>
      <div class="col-6 col-md-4">
        <a href="{{ route('product.category', 'laptop') }}" class="dc-none bg-vital-ocean {{$category == 'laptop' ? 'bg-vital-ocean-active' : ''}} rounded-4 d-flex align-items-center" style="height: 95px">
          <h4 class="m-auto light-blue">LAPTOP</h4>
        </a>
      </div>
      <div class="col-6 col-md-4">
        <a href="{{ route('product.category', 'tablet') }}" class="dc-none bg-aqua-spray {{$category == 'tablet' ? 'bg-aqua-spray-active' : ''}} rounded-4 d-flex align-items-center" style="height: 95px">
          <h4 class="m-auto light-blue">TABLET</h4>
        </a>
      </div>
    </div>
  </div>

  <div class="mb-5">
    <h4>Produk {{ucwords($category)}}</h4>
    <div class="row g-2">
      @foreach ($products as $product)
      <a href="{{ route('product.detail', $product->id) }}" class="dc-none col-4 col-lg-3">
        <div class="card p-2 rounded-4 shadow">
          <img src="{{asset($product->path)}}" class="product card-img-top border-dark rounded-3" alt="...">
          <div class="card-body px-0 pt-2 pb-0">
            <p class="m-0">{{$product->name}}</p>
            <p class="m-0">Rp{{number_format(($product->price) - ($product->discount * $product->price / 100), 2, ',', '.')}}</p>
            @if ($product->discount != 0)
              <p class="m-0"><span class="text-danger">{{$product->discount}}%</span> <s>Rp{{number_format($product->price, 2, ',', '.')}}</s></p>   
            @endif
          </div>
        </div>
      </a>
      @endforeach

    </div>
  </div>

  <a href="/homepage" class="dc-none py-2 px-4 bg-midnight-blue light-blue rounded-5 fw-bold">Kembali</a>
</div>
@endsection