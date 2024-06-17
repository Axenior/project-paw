@extends('layouts.app')

@section('content')
  <div class="container">
    <h4 class="mt-2">Keranjang Belanja</h4>
    
    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session()->get('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if ($carts->isEmpty())
      <div class="row g-5 mb-4">
        <div class="col col-12 col-md-5">
          <img src="images/assets/empty_cart.svg" alt="" class="w-100">
        </div>
        <div class="col col-12 col-md-7 d-flex border-3 border-start">
          <h4 class="my-auto">Belum ada yang dimasukkin ke keranjang nih</h4>
        </div>
      </div>
    @endif

    <div class="row g-3">
      @foreach ($carts as $cart)
      <div class="col col-12 col-lg-6 d-flex">
        <form action="{{route('product.checkout',$cart->id)}}" method="GET" class="dc-none midnight-blue">
          @csrf
          <input type="text" name="quantity" value="{{$cart->pivot->quantity}}" hidden>
          <button type="submit" class="dc-none p-0 rounded h-100 m-0" style="overflow: hidden">
            <div class="w-100 p-0 border-midnight-blue rounded" style="overflow: hidden">
              <div class="row m-2">
                <div class="col col-3 p-0">
                  <img src="{{asset($cart->path)}}" alt="..." class="card-img-top product rounded">
                </div>
                <div class="col col-9">
                  <p class="mb-1 text-start">{{$cart->name}}</p>
                  <h5 class="mb-1 text-start">Rp{{number_format(($cart->price) - ($cart->discount * $cart->price / 100), 2, ',', '.')}}</h5>
                  <div class="row">
                    @if ($cart->discount != 0)
                      <div class="col text-start"><p><span class="text-danger">{{$cart->discount}}% </span><s>Rp{{number_format($cart->price, 2, ',', '.')}}</s></p></div>
                    @endif
                    <div class="col text-end p-0">{{$cart->pivot->quantity}} x Rp{{number_format(($cart->price) - ($cart->discount * $cart->price / 100), 2, ',', '.')}}</div>
                  </div>
                </div>
              </div>
              <div class="row bg-midnight-blue m-0 py-2 light-blue">
                <div class="col text-start">Subtotal : </div>
                <div class="col text-end">Rp{{number_format(($cart->price - ($cart->discount * $cart->price / 100)) * $cart->pivot->quantity, 2, ',', '.')}}</div>
              </div>
            </div>
          </button>
        </form>
        <div>
          <form action="{{route('cart.destroy', ['cart' => $cart->pivot->id])}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn dc-none bg-danger mt-2 ms-1" style="height:fit-content ">
              <i class="bi bi-trash light-blue"></i>
            </button>
          </form>
          <a href="{{route('cart.edit', ['cart' => $cart->pivot->id])}}" class="btn dc-none bg-warning mt-2 ms-1" style="height:fit-content ">
            <i class="bi bi-pencil-square light-blue"></i>
          </a>
        </div>
      </div>
      @endforeach
    </div>

    <a href="{{route('homepage')}}" class="d-inline-block dc-none rounded-5 p-2 bg-midnight-blue light-blue text-center my-3 px-5">KEMBALI</a>
  </div>
@endsection