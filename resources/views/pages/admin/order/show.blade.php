@extends('layouts.admin')

@section('title', 'Detail Pemesanan')

@section('content')
<style>
  .service:checked + label {
    background-color: #27374D;
    color: #DDE6ED;
  }
  .service + label:hover{
    cursor: pointer;
  }
</style>
  <div class="container mt-4">
    <h3>Detail Pemesanan</h3>
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
        <div class="mt-3">
                <h5 class="card-title">Status Pesanan : {{ $purchase->status }}</h5>
            </div>
  {{-- @dd($purchase) --}}
    <form action="{{route('checkout.store',[$purchase->id])}}" method="POST">
      @csrf
      <div class="row g-4">
        <div class="col-12 col-md-6">
          <h5>Alamat Pengiriman</h5>
          <div class="row mt-2">
            <div class="col">
              <label for="first-name">Nama Depan</label>
              <input type="text" name="first_name" id="first-name" class="form-control border-midnight-blue" value="{{ $purchase->first_name }}" disabled>
            </div>
            <div class="col">
              <label for="last-name">Nama Belakang</label>
              <input type="text" name="last_name" id="last-name" class="form-control border-midnight-blue" value="{{ $purchase->last_name }}" disabled>
            </div>
          </div>

          <label for="address_title" class="mt-2">Judul Alamat (Contoh : Kost, Kantor, Rumah Nenek)</label>
          <input type="text" name="address_title" id="address_title" class="form-control border-midnight-blue" value="{{ $purchase->address_title }}" disabled>

          <label for="address" class="mt-2">Alamat</label>
          <textarea name="address" id="address" cols="30" rows="4" class="d-block form-control border-midnight-blue" style="resize: none" disabled>{{ $purchase->address }}</textarea>

          <div class="row mt-2">
            <div class="col">
              <label for="province">Provinsi</label>
              <input type="text" name="province" id="province" class="form-control border-midnight-blue" value="{{ $purchase->province }}" disabled>
            </div>
            <div class="col">
              <label for="city">Kota</label>
              <input type="text" name="city" id="city" class="form-control border-midnight-blue" value="{{ $purchase->city }}" disabled>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col">
              <label for="subdistrict">Kecamatan</label>
              <input type="text" name="subdistrict" id="subdistrict" class="form-control border-midnight-blue" value="{{ $purchase->subdistrict }}" disabled>
            </div>
            <div class="col">
              <label for="postal-code">Kode Pos</label>
              <input type="text" name="postal_code" id="postal-code" class="form-control border-midnight-blue" value="{{ $purchase->postal_code }}" disabled>
            </div>
          </div>
          {{-- @dd($purchase->product()->get()) --}}
          <h5 class="mt-3">Produk Yang Dipesan</h5>
          <div class="w-100 p-0 border-midnight-blue rounded mt-2" style="overflow: hidden">
            <div class="row m-2">
              <div class="col col-3 p-0">
                <img class="product card-img-top rounded" src="{{asset($purchase->product_path)}}" alt="...">
              </div>
              <div class="col col-9">
                <p class="mb-1">{{$purchase->product_name}}</p>
                <h5 class="mb-1">Rp{{number_format(($purchase->product_price) - ($purchase->product_discount * $purchase->product_price / 100), 2, ',', '.')}}</h5>
                <div class="row">
                @if ($purchase->product_discount != 0)
                  <div class="col"><p class="m-0"><span class="text-danger">{{$purchase->product_discount}}%</span> <s>Rp{{number_format($purchase->product_price, 2, ',', '.')}}</s></p></div>
                @endif
                  <div class="col text-end p-0">{{$purchase->quantity}} x Rp{{number_format(($purchase->product_price) - ($purchase->product_discount * $purchase->product_price / 100), 2, ',', '.')}}</div>
                </div>
              </div>
            </div>
            <div class="row bg-midnight-blue m-0 py-2 light-blue">
              <div class="col">Subtotal : </div>
              <div class="col text-end">Rp{{number_format(($purchase->product_price - ($purchase->product_discount * $purchase->product_price / 100)) * $purchase->quantity, 2, ',', '.')}}</div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <h5>Pilih Jasa Pengiriman</h5>
          <div class="w-100 mt-2">
            <input type="radio" id="service1" name="shipping_service" class="service" value="reguler" hidden checked {{ $purchase->shipping_service == 'reguler' ? 'checked' : ''}} disabled>
            <label for="service1" class="midnight-blue w-100 py-3 px-4 rounded-4 border-midnight-blue">
              <p class="mb-1">Reguler</p>
              <h5>Rp12.000,00</h5>
              <p class="m-0">Estimasi Sampai: 5 hari dari pemesanan</p>
            </label>
          </div>
          <div class="w-100">
            <input type="radio" id="service2" name="shipping_service" class="service" value="one day service" hidden {{ $purchase->shipping_service == 'one day service' ? 'checked' : ''}} disabled>
            <label for="service2" class="midnight-blue w-100 py-3 px-4 rounded-4 border-midnight-blue mt-2">
              <p class="mb-1">One Day Service</p>
              <h5>Rp21.000,00</h5>
              <p class="m-0">Estimasi Sampai: 1-2 hari dari pemesanan</p>
            </label>
          </div>

          <h5 class="mt-3">Detail Transaksi</h5>
          <div class="w-100 p-0 border-midnight-blue rounded" style="overflow: hidden">
            <div class="row mx-2 mt-2">
              <div class="col col-3 p-0">
                <p class="mb-1">Harga Total</p>
              </div>
              <div class="col col-9 text-end my-auto">
                <p class="mb-1">Rp{{number_format($purchase->product_price * $purchase->quantity, 2, ',', '.')}}</p>
              </div>
            </div>
            @if ($purchase->product_discount != 0)
            <div class="row mx-2">
              <div class="col col-3 p-0">
                <p class="mb-1">Diskon</p>
              </div>
              <div class="col col-9 text-end my-auto">
                <p class="text-danger mb-1">-Rp{{number_format($purchase->product_price * $purchase->product_discount / 100 * $purchase->quantity, 2, ',', '.')}}</p>
              </div>
            </div>
            @endif
            <div class="row mx-2">
              <div class="col col-3 p-0">
                <p class="mb-1">Jasa Pengiriman</p>
              </div>
              <div class="col col-9 text-end my-auto">
                <p class="mb-1" id="serviceproduct_price">Rp12.000,00</p>
              </div>
            </div>
            <div class="row mx-2 mb-2">
              <div class="col col-3 p-0">
                <p class="mb-1">Asuransi</p>
              </div>
              <div class="col col-9 text-end my-auto">
                <p class="mb-1">Rp20.000,00</p>
                <input type="number" name="insurance" id="" value="20000" hidden>
              </div>
            </div>
            <div class="row bg-midnight-blue m-0 py-2 light-blue">
              <div class="col">Subtotal : </div>
              <div id="subtotal" class="col text-end">Rp{{number_format(($purchase->product_price - ($purchase->product_discount * $purchase->product_price / 100)) * $purchase->quantity + 12000 + 20000, 2, ',', '.')}}</div>
            </div>
          </div>

          <button type="button" onclick="history.back()" class="d-block dc-none rounded-5 p-2 bg-light-steel-blue midnight-blue text-center my-2 w-100">Kembali</button>
        </div>
      </div>
    </form>
  </div>

  <script>
    const serviceproduct_price = document.getElementById('serviceproduct_price');
    let serviceproduct_priceValue = serviceproduct_price.textContent;
    serviceproduct_priceValue = parseInt(serviceproduct_priceValue.replace(/[^0-9,]/g, '').split(',')[0]);
    
    const subtotal = document.getElementById('subtotal');
    let subtotalValue = subtotal.textContent;
    subtotalValue = parseInt(subtotalValue.replace(/[^0-9,]/g, '').split(',')[0]);

    </script>
@endsection