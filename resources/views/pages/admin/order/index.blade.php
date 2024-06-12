@extends('layouts.admin')

@section('title', 'Pesanan')

@section('content') 
    <div class="order-container">
        <div class="order-header">  
            <h2>Detail Pesanan</h2> 
        </div>
        <div class="order-content">
            <div class="order-item d-flex align-items-center">
                <div class="item-image">
                    <img src="https://via.placeholder.com/100" alt="Product Image">
                </div>
                <div class="item-details">
                    <h3>Samsung S21 Ultra 5G</h3>
                    <p>Jumlah: 2</p>
                    <p>Harga: Rp200.000</p>
                </div>
                <div class="item-total">
                    <p>Total: Rp400.000</p>
                </div>
            </div>
            <div class="order-item d-flex align-items-center">
                <div class="item-image">
                    <img src="https://via.placeholder.com/100" alt="Product Image">
                </div>
                <div class="item-details">
                    <h3>iPhone 12 Pro</h3>
                    <p>Jumlah: 1</p>
                    <p>Harga: Rp150.000</p>
                </div>
                <div class="item-total">
                    <p>Total: Rp150.000</p>
                </div>
            </div>
        </div>
        <div class="order-footer text-center mt-3">
            <button class="btn order-button">Pesan Sekarang</button>
        </div>
    </div>
@endsection

