@extends('layouts.app')

@section('content')
  <div class="container" style="min-height: 73vh">
    <h4 class="mt-2">Keranjang Belanja</h4>
    <div class="row g-3">
      <div class="col col-12 col-lg-6 d-flex">
        <a href="/detail" class="dc-none midnight-blue">
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
        </a>
        <div>
          <button class="btn dc-none bg-danger mt-2 ms-1" style="height:fit-content ">
            <i class="bi bi-trash light-blue"></i>
          </button>
          <a href="/cart/edit" class="btn dc-none bg-warning mt-2 ms-1" style="height:fit-content ">
            <i class="bi bi-pencil-square light-blue"></i>
          </a>
        </div>
      </div>
      <div class="col col-12 col-lg-6 d-flex">
        <a href="/detail" class="dc-none midnight-blue">
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
        </a>
        <div>
          <button class="btn dc-none bg-danger mt-2 ms-1" style="height:fit-content ">
            <i class="bi bi-trash light-blue"></i>
          </button>
          <a href="/cart/edit" class="btn dc-none bg-warning mt-2 ms-1" style="height:fit-content ">
            <i class="bi bi-pencil-square light-blue"></i>
          </a>
        </div>
      </div>
      <div class="col col-12 col-lg-6 d-flex">
        <a href="/detail" class="dc-none midnight-blue">
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
        </a>
        <div>
          <button class="btn dc-none bg-danger mt-2 ms-1" style="height:fit-content ">
            <i class="bi bi-trash light-blue"></i>
          </button>
          <a href="/cart/edit" class="btn dc-none bg-warning mt-2 ms-1" style="height:fit-content ">
            <i class="bi bi-pencil-square light-blue"></i>
          </a>
        </div>
      </div>
    </div>

    <button onclick="history.back()" class="d-block dc-none rounded-5 p-2 bg-midnight-blue light-blue text-center my-3 px-5">KEMBALI</button>
  </div>
@endsection