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
              <img src="https://plus.unsplash.com/premium_photo-1670537994863-5ad53a3214e0?q=80&w=1635&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="product card-img-top border-dark rounded-3" alt="...">
            </div>
            <div class="col col-9">
              <p class="mb-1">Samsung Galaxy A23</p>
              <h5 class="mb-1">Rp2.500.000,00</h5>
              <div class="row">
                <div class="col"><p><span class="text-danger">30% </span><s>Rp3.000.000</s></p></div>
                <div class="col text-end p-0">1 x Rp2.500.000,00</div>
              </div>
            </div>
          </div>
          <div class="row bg-midnight-blue m-0 py-2 light-blue">
            <div class="col">Subtotal : </div>
            <div class="col text-end">Rp2.500.000,00</div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <h5>Pilih Jasa Pengiriman</h5>
        <div class="w-100 mt-2">
          <input type="radio" id="service1" name="service" class="service" hidden>
          <label for="service1" class="midnight-blue w-100 py-3 px-4 rounded-4 border-midnight-blue">
            <p class="mb-1">Reguler</p>
            <h5>Rp9.000,00</h5>
            <p class="m-0">Estimasi Sampai: 5 hari dari pemesanan</p>
          </label>
        </div>
        <div class="w-100">
          <input type="radio" id="service2" name="service" class="service" hidden>
          <label for="service2" class="midnight-blue w-100 py-3 px-4 rounded-4 border-midnight-blue mt-2">
            <p class="mb-1">One Day Service</p>
            <h5>Rp15.000,00</h5>
            <p class="m-0">Estimasi Sampai: 1-2 hari dari pemesanan</p>
          </label>
        </div>

        <h5 class="mt-3">Detail Transaksi</h5>
        <div class="w-100 p-0 border-midnight-blue rounded" style="overflow: hidden">
          <div class="row m-2">
            <div class="col col-3 p-0">
              <p class="mb-1">Harga Total</p>
              <p class="mb-1">Diskon</p>
              <p class="mb-1">Ongkos Kirim</p>
            </div>
            <div class="col col-9 text-end">
              <p class="mb-1">Rp3.000.000</p>
              <p class="text-danger mb-1">-Rp500.000</p>
              <p class="mb-1">Rp50.000</p>
            </div>
          </div>
          <div class="row bg-midnight-blue m-0 py-2 light-blue">
            <div class="col">Subtotal : </div>
            <div class="col text-end">Rp2.500.000,00</div>
          </div>
        </div>

        <button class="dc-none bg-midnight-blue p-2 w-100 rounded-5 mt-3 light-blue">Pesan Sekarang</button>

      </div>
    </div>
  </div>
@endsection