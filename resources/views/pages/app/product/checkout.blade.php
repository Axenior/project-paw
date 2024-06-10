@extends('layouts.app')

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
    <h3>Checkout</h3>
    
    <div class="row g-4">
      <div class="col-12 col-md-6">
        <h5>Alamat Pengiriman</h5>
        <div class="row mt-2">
          <div class="col">
            <label for="first-name">Nama Depan</label>
            <input type="text" name="firstName" id="first-name" class="form-control border-midnight-blue">
          </div>
          <div class="col">
            <label for="last-name">Nama Belakang</label>
            <input type="text" name="lastName" id="last-name" class="form-control border-midnight-blue">
          </div>
        </div>

        <label for="addressTitle" class="mt-2">Judul Alamat (Contoh : Kost, Kantor, Rumah Nenek)</label>
        <input type="text" name="addressTitle" id="addressTitle" class="form-control border-midnight-blue">

        <label for="address" class="mt-2">Alamat</label>
        <textarea name="address" id="address" cols="30" rows="4" class="d-block form-control border-midnight-blue" style="resize: none"></textarea>

        <div class="row mt-2">
          <div class="col">
            <label for="province">Provinsi</label>
            <input type="text" name="province" id="province" class="form-control border-midnight-blue">
          </div>
          <div class="col">
            <label for="city">Kota</label>
            <input type="text" name="city" id="city" class="form-control border-midnight-blue">
          </div>
        </div>

        <div class="row mt-2">
          <div class="col">
            <label for="subdistrict">Kecamatan</label>
            <input type="text" name="subdistrict" id="subdistrict" class="form-control border-midnight-blue">
          </div>
          <div class="col">
            <label for="postal-code">Kode Pos</label>
            <input type="text" name="postalCode" id="postal-code" class="form-control border-midnight-blue">
          </div>
        </div>

        <h5 class="mt-3">Produk Yang Dipesan</h5>
        <div class="w-100 p-0 border-midnight-blue rounded mt-2" style="overflow: hidden">
          <div class="row m-2">
            <div class="col col-3 p-0">
              <img class="product card-img-top rounded" src="{{asset($product->path)}}" alt="...">
            </div>
            <div class="col col-9">
              <p class="mb-1">{{$product->name}}</p>
              <h5 class="mb-1">Rp{{number_format(($product->price) - ($product->discount * $product->price / 100), 2, ',', '.')}}</h5>
              <div class="row">
              @if ($product->discount != 0)
                <div class="col"><p class="m-0"><span class="text-danger">{{$product->discount}}%</span> <s>Rp{{number_format($product->price, 2, ',', '.')}}</s></p></div>
              @endif
                <div class="col text-end p-0">{{$quantity}} x Rp{{number_format(($product->price) - ($product->discount * $product->price / 100), 2, ',', '.')}}</div>
              </div>
            </div>
          </div>
          <div class="row bg-midnight-blue m-0 py-2 light-blue">
            <div class="col">Subtotal : </div>
            <div class="col text-end">Rp{{number_format(($product->price - ($product->discount * $product->price / 100)) * $quantity, 2, ',', '.')}}</div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <h5>Pilih Jasa Pengiriman</h5>
        <div class="w-100 mt-2">
          <input type="radio" id="service1" name="service" class="service" hidden checked>
          <label for="service1" class="midnight-blue w-100 py-3 px-4 rounded-4 border-midnight-blue">
            <p class="mb-1">Reguler</p>
            <h5>Rp12.000,00</h5>
            <p class="m-0">Estimasi Sampai: 5 hari dari pemesanan</p>
          </label>
        </div>
        <div class="w-100">
          <input type="radio" id="service2" name="service" class="service" hidden>
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
              <p class="mb-1">Rp{{number_format($product->price * $quantity, 2, ',', '.')}}</p>
            </div>
          </div>
          @if ($product->discount != 0)
          <div class="row mx-2">
            <div class="col col-3 p-0">
              <p class="mb-1">Diskon</p>
            </div>
            <div class="col col-9 text-end my-auto">
              <p class="text-danger mb-1">-Rp{{number_format($product->price * $product->discount / 100 * $quantity, 2, ',', '.')}}</p>
            </div>
          </div>
          @endif
          <div class="row mx-2">
            <div class="col col-3 p-0">
              <p class="mb-1">Jasa Pengiriman</p>
            </div>
            <div class="col col-9 text-end my-auto">
              <p class="mb-1" id="servicePrice">Rp12.000,00</p>
            </div>
          </div>
          <div class="row mx-2 mb-2">
            <div class="col col-3 p-0">
              <p class="mb-1">Ongkos Kirim</p>
            </div>
            <div class="col col-9 text-end my-auto">
              <p class="mb-1">Rp50.000,00</p>
            </div>
          </div>
          <div class="row bg-midnight-blue m-0 py-2 light-blue">
            <div class="col">Subtotal : </div>
            <div id="subtotal" class="col text-end">Rp{{number_format(($product->price - ($product->discount * $product->price / 100)) * $quantity + 12000 + 50000, 2, ',', '.')}}</div>
          </div>
        </div>

        <button type="submit" class="dc-none bg-midnight-blue p-2 w-100 rounded-5 mt-3 light-blue">Pesan Sekarang</button>
        <button type="button" onclick="history.back()" class="d-block dc-none rounded-5 p-2 bg-light-steel-blue midnight-blue text-center my-2 w-100">Kembali</button>
      </div>
    </div>
  </div>

  <script>
    const servicePrice = document.getElementById('servicePrice');
    let servicePriceValue = servicePrice.textContent;
    servicePriceValue = parseInt(servicePriceValue.replace(/[^0-9,]/g, '').split(',')[0]);
    
    const subtotal = document.getElementById('subtotal');
    let subtotalValue = subtotal.textContent;
    subtotalValue = parseInt(subtotalValue.replace(/[^0-9,]/g, '').split(',')[0]);

    document.addEventListener('DOMContentLoaded', function() {
      const radios = document.querySelectorAll('input[name="service"]');
      
      radios.forEach(radio => {
        radio.addEventListener('change', function() {
          if (this.checked) {
            if (this.id === 'service1') {

              servicePrice.innerHTML = 'Rp12.000,00'
              let totalPrice = subtotalValue;
              let formatedTotalPrice = totalPrice.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
              subtotal.innerHTML = formatedTotalPrice
              } else if (this.id === 'service2') {
                servicePrice.innerHTML = 'Rp21.000,00'
                let totalPrice = subtotalValue - 12000 + 21000;
                let formatedTotalPrice = totalPrice.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
                subtotal.innerHTML = formatedTotalPrice
            }
          }
        });
      });
    });
    </script>
@endsection