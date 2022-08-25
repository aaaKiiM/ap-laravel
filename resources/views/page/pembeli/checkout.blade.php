@extends('layout.pembeli')
@section('title','Emperor Cake E-Commerce')
@section('content')
<?php
    $pesan = \App\Models\Pesan::where('users_id', Auth::user()->id)->where('status',0)->first();
    if (!empty($pesan)) {
        $notif = \App\Models\PesanDetail::where('pesans_id', $pesan->id)->count();
    }
?>
<main class="main">
    <div class="container mb-80 mt-50">
        <div class="row">
            <div class="col-lg-8 mb-40">
                <h1 class="heading-2 mb-10">Your Cart</h1>
                <div class="d-flex justify-content-between">
                    <h6 class="text-body">There are <span class="text-brand">
                    @if (!empty($notif))
                        {{ $notif }}
                    @else
                        0
                    @endif</span> products in your cart</h6>
                    <h6 class="text-body"><a href="#" class="text-muted"><i class="fi-rs-trash mr-5"></i>Clear Cart</a></h6>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-8">
                    <div class="table-responsive shopping-summery">
                        <table class="table table-wishlist">
                            <thead>
                                <tr class="main-heading">
                                    <th class="custome-checkbox start pl-30">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="">
                                        <label class="form-check-label" for="exampleCheckbox11"></label>
                                    </th>
                                    <th scope="col" colspan="2">Product</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Total</th>
                                    <th scope="col" class="end">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($pesan))
                                    @foreach ( $pesanDetail as $isi)
                                        <tr class="pt-30">
                                            <td class="custome-checkbox pl-30">
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                                <label class="form-check-label" for="exampleCheckbox1"></label>
                                            </td>
                                            <td class="image product-thumbnail pt-40"><img src="img/produk/{{ $isi->produk->foto }}" alt="#"></td>
                                            <td class="product-des product-name">
                                                <h6 class="mb-5"><a class="product-name mb-10 text-heading" href="shop-product-right.html">{{ $isi->produk->nama_kue }}</a></h6>
                                            </td>
                                            <td class="price" data-title="Price">
                                                <h4 class="text-body">Rp. {{ number_format( $isi->produk->harga,0,",",".") }}</h4>
                                            </td>
                                            <td class="price" data-title="Price">
                                                <h4 class="text-body">{{ $isi->jumlah }}</h4>
                                            </td>
                                            <td class="price" data-title="Price">
                                                <h4 class="text-body">Rp. {{ number_format( $isi->total_harga,0,",",".") }}</h4>
                                            </td>
                                            <td class="action text-center" data-title="Remove"><a href="#" class="text-body"><i class="fi-rs-trash"></i></a></td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    @if (!empty($pesan))
                    <div class="border p-md-4 cart-totals ml-30">
                        <div class="table-responsive">
                            <table class="table no-border">
                                <tbody>
                                    <tr>
                                        <td class="cart_total_label">
                                            <h6 class="text-muted">Dikirim Ke</h6>
                                        </td>
                                        <td class="cart_total_amount">
                                            <h5 class="text-heading text-end">{{auth()->user()->alamat}}</h4</td> </tr> <tr>
                                        <td scope="col" colspan="2">
                                            <div class="divider-2 mt-10 mb-10"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cart_total_label">
                                            <h6 class="text-muted">Total</h6>
                                        </td>
                                        <td class="cart_total_amount">
                                            <h4 class="text-brand text-end">Rp. {{ number_format( $pesan->total_harga,0,",",".") }}</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="/konfirmasi" class="btn mb-20 w-100">Proceed To CheckOut<i class="fi-rs-sign-out ml-15"></i></a>
                    </div>
                    @endif
                </div>
        </div>
    </div>
</main>
@endsection
