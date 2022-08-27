@extends('layout.pembeli1')
@section('title', 'Struk')
@section('content')
    <!--=====================================
                        BANNER PART START
            =======================================-->
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>Order invoice</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="shop-4column.html">shop grid</a></li>
                <li class="breadcrumb-item"><a href="product-video.html">product details</a></li>
                <li class="breadcrumb-item"><a href="checkout.html">checkout</a></li>
                <li class="breadcrumb-item active" aria-current="page">invoice</li>
            </ol>
        </div>
    </section>
    <!--=====================================
                        BANNER PART END
            =======================================-->


    <!--=====================================
                        INVOICE PART START
            =======================================-->
    <section class="inner-section invoice-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert-info">
                        <p>Terimakasih Telah Berbelanja Di Website Ini!</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Pesanan Diterima</h4>
                        </div>
                        <div class="account-content">
                            <div class="invoice-recieved">
                                <h6>No Faktur <span>{{ $pesandetail->pesan->no_faktur }}</span></h6>
                                <h6>Tanggal Pesan <span>{{ $pesandetail->pesan->tanggal }}</span></h6>
                                <h6>Total Harga <span>Rp. {{ number_format( $pesandetail->total_harga,0,",",".") }}</span></h6>
                                <h6>Metode Pembayaran <span>Transfer</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Detail Pesanan</h4>
                        </div>
                        <div class="account-content">
                            <ul class="invoice-details">
                                <li>
                                    <h6>Total Produk Yang Dibeli</h6>
                                    <p>{{ $pesandetail->jumlah }} Produk</p>
                                </li>
                                <li>
                                    <h6>Lokasi Antar</h6>
                                    <p>{{auth()->user()->alamat}}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Total</h4>
                        </div>
                        <div class="account-content">
                            <ul class="invoice-details">
                                <li>
                                    <h6>Metode Pembayaran</h6>
                                    <p>Transfer</p>
                                </li>
                                <li>
                                    <h6>Biaya Admin</h6>
                                    <p>Rp. 1.000</p>
                                </li>
                                <li>
                                    <h6>Total<small></small></h6>
                                    <p>Rp. {{ number_format( $pesandetail->total_harga+1000,0,",",".") }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Kirim Ke No Rekening</h4>
                        </div>
                        <div class="account-content">
                            <ul class="invoice-details">
                                <li>
                                    <h6>No Rekening</h6>
                                    <p>089763231214 - BSI</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-12">
                    <div class="table-scroll">
                        <table class="table-list">
                            <thead>
                                <tr>
                                    <th scope="col">Serial</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">brand</th>
                                    <th scope="col">quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesandetail as $isi)
                                    <tr>
                                        <td class="table-serial">
                                            <h6>{{ $nomor++ }}</h6>
                                        </td>
                                        <td class="table-image"><img src="{{ asset('produk/'.$isi->produk->foto ) }}" alt="product"></td>
                                        <td class="table-name">
                                            <h6>{{ $isi->produk->nama_kue }}</h6>
                                        </td>
                                        <td class="table-price">
                                            <h6>Rp. {{ number_format( $isi->produk->harga,0,",",".") }}</h6>
                                        </td>
                                        <td class="table-brand">
                                            <h6>{{ $isi->produk->toko->nama_toko }}</h6>
                                        </td>
                                        <td class="table-quantity">
                                            <h6>{{ $isi->jumlah }} <Small>Buah</Small></h6>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-lg-12 text-center mt-5">
                    {{-- <a class="btn btn-inline" href="#">
                        <i class="icofont-download"></i>
                        <span>download invoice</span>
                    </a> --}}
                    <div class="back-home">
                        <a href="/">Kembali Ke Beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                        INVOICE PART END
            =======================================-->
@endsection
