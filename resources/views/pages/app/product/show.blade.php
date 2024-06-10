@extends('layouts.app')

@section('content')
<div class="container my-4" style="min-height: 74.2vh">
  <form id="myForm" method="POST" action="">
    @csrf
    @if (auth()->user())
      <input type="text" name="user_id" value="{{auth()->user()->id}}" hidden>
    @endif
    <input type="text" name="product_id" value="{{$product->id}}" hidden>
    <div class="row g-2">
      <div class="col col-12 col-md-6 shadow">
        <img src="{{asset($product->path)}}" class="product card-img-top border-dark rounded-3" alt="...">
      </div>
      <div class="col col-12 col-md-6">
        {{-- <p>Home > Samsung Galaxy S23</p> --}}
        <h4>{{$product->name}}</h4>
        <p id="price" class="mb-0">Rp{{number_format(($product->price) - ($product->discount * $product->price / 100), 2, ',', '.')}}</p>
        @if ($product->discount != 0)
        <p class="mt-0 mb-2"><span class="text-danger">{{$product->discount}}%</span> <s>Rp{{number_format($product->price, 2, ',', '.')}}</s></p>   
        @endif
        <div class="row">
          <div class="col">
            <p>Memori</p>
          </div>
          <div class="col">
            <p class="border border-3 rounded px-2 border-primary text-primary" style="width: fit-content">{{$product->memory}}</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p>Garansi</p>
          </div>
          <div class="col">
            <p>{{$product->warranty}}</p>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col d-flex my-auto">
            <p class="d-flex my-auto">Jumlah</p>
          </div>
          <div class="col">
            <input id="quantity" name="quantity" class="form-control border-primary" type="number" value="1" style="max-width: 80px" min="1">
          </div>
        </div>
        <div class="row mt-4">
          <div class="col">
            <h5 class=" my-auto">Total</h5>
          </div>
          {{-- <input type="text" class="col dc-none text-dark" name="total" id="total" value="Rp2.200.000,00" style="font-weight: 600;" disabled> --}}
          <div class="col">
            <h6 id="total">Rp{{number_format(($product->price) - ($product->discount * $product->price / 100), 2, ',', '.')}}</h6>
          </div>
        </div>
        
        <button type="submit" id="checkout" onclick="setActionAndMethod('{{ route('product.checkout', $product->id) }}', 'GET')" class="d-block dc-none rounded-5 p-2 bg-midnight-blue light-blue text-center my-2 w-100">BELI SEKARANG</button>

        <button type="submit" id="cart" onclick="setActionAndMethod('{{ route('cart.store', $product->id) }}', 'POST')" class="d-block dc-none rounded-5 p-2 bg-steel-blue light-blue text-center my-2 w-100">TAMBAH KE KERANJANG</button>

        <button type="button" onclick="history.back()" class="d-block dc-none rounded-5 p-2 bg-light-steel-blue midnight-blue text-center my-2 w-100">KEMBALI</button>
      </div>
    </div>
  </form>
  <h5 class="mt-2">Deskripsi</h5>
  <p>{{$product->description}}</p>
</div>

<script>
  const priceValue = document.getElementById('price').textContent;
  const unformatedPrice = parseInt(priceValue.replace(/[^0-9,]/g, '').split(',')[0]);

  const quantity = document.getElementById('quantity');
  const total = document.getElementById('total');

  document.addEventListener('DOMContentLoaded',function(){
    let totalPrice = unformatedPrice * quantity.value;
    let formatedTotalPrice = totalPrice.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
    total.innerHTML = formatedTotalPrice;
  })

  quantity.addEventListener('input',function(){
    let totalPrice = unformatedPrice * quantity.value;
    let formatedTotalPrice = totalPrice.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
    total.innerHTML = formatedTotalPrice;
  })

  function setActionAndMethod(route, method) {
    document.getElementById('myForm').action = route;
    document.getElementById('myForm').method = method;
  }
</script>

@endsection