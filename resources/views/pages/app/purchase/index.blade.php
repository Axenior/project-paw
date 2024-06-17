@extends('layouts.app')

@section('content')
  <div class="container" style="min-height: 73vh">
    <h4 class="mt-2">Riwayat Pemesanan</h4>
    
    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session()->get('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="row g-3">
      @foreach ($purchases as $purchase)
      {{-- @dd($purchase) --}}
      <div class="col col-12 col-lg-6 d-flex">
        <form action="{{route('history.detail',$purchase->id)}}" method="GET" class="dc-none midnight-blue">
          @csrf
          <input type="text" name="quantity" value="{{$purchase->quantity}}" hidden>
          <button type="submit" class="dc-none p-0">
            <div class="w-100 p-0 border-midnight-blue rounded mt-2" style="overflow: hidden">
              <div class="row m-2">
                <div class="col col-3 p-0">
                  <img src="{{asset($purchase->product_path)}}" alt="..." class="card-img-top product rounded">
                </div>
                <div class="col col-9">
                  <p class="mb-1 text-start">{{$purchase->product_name}}</p>
                  <h5 class="mb-1 text-start">Rp{{number_format(($purchase->product_price) - ($purchase->product_discount * $purchase->product_price / 100), 2, ',', '.')}}</h5>
                  <div class="row">
                    @if ($purchase->product_discount != 0)
                      <div class="col text-start"><p><span class="text-danger">{{$purchase->product_discount}}% </span><s>Rp{{number_format($purchase->product_price, 2, ',', '.')}}</s></p></div>
                    @endif
                    <div class="col text-end p-0">{{$purchase->quantity}} x Rp{{number_format(($purchase->product_price) - ($purchase->product_discount * $purchase->product_price / 100), 2, ',', '.')}}</div>
                  </div>
                </div>
              </div>
              <div class="row mx-2 mt-2">
                <div class="col col-3 p-0 text-start">
                  <p class="mb-1">Harga Total</p>
                </div>
                <div class="col col-9 text-end my-auto">
                  <p class="mb-1">Rp{{number_format($purchase->product_price * $purchase->quantity, 2, ',', '.')}}</p>
                </div>
              </div>
              @if ($purchase->discount != 0)
              <div class="row mx-2">
                <div class="col col-3 p-0 text-start">
                  <p class="mb-1">Diskon</p>
                </div>
                <div class="col col-9 text-end my-auto">
                  <p class="text-danger mb-1">-Rp{{number_format($purchase->product_price * $purchase->product_discount / 100 * $purchase->quantity, 2, ',', '.')}}</p>
                </div>
              </div>
              @endif
              <div class="row mx-2">
                <div class="col col-3 p-0 text-start">
                  <p class="mb-1">Jasa Pengiriman</p>
                </div>
                <div class="col col-9 text-end my-auto">
                  <p class="mb-1" id="servicePrice">Rp12.000,00</p>
                </div>
              </div>
              <div class="row mx-2 mb-2">
                <div class="col col-3 p-0 text-start">
                  <p class="mb-1">Asuransi</p>
                </div>
                <div class="col col-9 text-end my-auto">
                  <p class="mb-1">Rp20.000,00</p>
                  <input type="number" name="insurance" id="" value="20000" hidden>
                </div>
              </div>
              {{-- @dd($purchase) --}}
              <div class="row bg-midnight-blue m-0 py-2 light-blue">
                <div class="col text-start">Subtotal : </div>
                <div id="subtotal" class="col text-end">Rp{{number_format(($purchase->product_price - ($purchase->product_discount * $purchase->product_price / 100)) * $purchase->quantity + 12000 + 20000, 2, ',', '.')}}</div>
              </div>
            </div>
          </button>
        </form>
      </div>
      @endforeach
    </div>

    <a href="{{route('homepage')}}" class="d-inline-block dc-none rounded-5 p-2 bg-midnight-blue light-blue text-center my-3 px-5">KEMBALI</a>
  </div>
@endsection