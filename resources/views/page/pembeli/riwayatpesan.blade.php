@extends('layout.pembeli1')
@section('title', 'Riwayat Pesanan')
@section('content')
    <!--=====================================
                BANNER PART START
    =======================================-->
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>Order History</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Orderlist</li>
            </ol>
        </div>
    </section>
    <!--=====================================
                BANNER PART END
    =======================================-->

    <!--=====================================
                        ORDERLIST PART START
            =======================================-->
    <section class="inner-section orderlist-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="orderlist-filter">
                        <h5>Total Pesanan <span>{{$total}}</span></h5>
                        {{-- <div class="filter-short">
                            <label class="form-label">short by:</label>
                            <select class="form-select">
                                <option value="all" selected>all order</option>
                                <option value="recieved">recieved order</option>
                                <option value="processed">processed order</option>
                                <option value="shipped">shipped order</option>
                                <option value="delivered">delivered order</option>
                            </select>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @forelse ($pesan->pesan as $isi)
                        <div class="orderlist">
                            <div class="orderlist-head">
                                <h5>Pesanan No {{ $nomor++ }}</h5>
                                @if ($isi->dibayar == 1 && $isi->dikirim == 0)
                                    <h5>Saldo Diterima</h5>
                                @elseif ($isi->dibayar == 2 && $isi->dikirim == 0)
                                    <h5>Saldo Tidak Diterima</h5>
                                @elseif ($isi->dibayar == 1 && $isi->dikirim == 1)
                                    <h5>Pesanan Sedang Dikirim</h5>
                                @else
                                    <h5>Pesanan Diterima</h5>
                                @endif
                            </div>
                            <div class="orderlist-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="order-track">
                                            @if ($isi->dibayar == 1 && $isi->dikirim == 0)
                                                <ul class="order-track-list">
                                                    <li class="order-track-item active">
                                                        <i class="icofont-check"></i>
                                                        <span>Pesanan Diterima</span>
                                                    </li>
                                                    <li class="order-track-item active">
                                                        <i class="icofont-check"></i>
                                                        <span>Saldo Diterima</span>
                                                    </li>
                                                    <li class="order-track-item">
                                                        <i class="icofont-close"></i>
                                                        <span>Pesanaan Sedang Dikirim</span>
                                                    </li>
                                                </ul>
                                            @elseif ($isi->dibayar == 2 && $isi->dikirim == 0)
                                                <ul class="order-track-list">
                                                    <li class="order-track-item active">
                                                        <i class="icofont-check"></i>
                                                        <span>Pesanan Diterima</span>
                                                    </li>
                                                    <li class="order-track-item active">
                                                        <i class="icofont-close"></i>
                                                        <span>Saldo Tidak Diterima</span>
                                                    </li>
                                                    <li class="order-track-item">
                                                        <i class="icofont-close"></i>
                                                        <span>Pesanaan Sedang Dikirim</span>
                                                    </li>
                                                </ul>
                                            @elseif ($isi->dibayar == 1 && $isi->dikirim == 1)
                                                <ul class="order-track-list">
                                                    <li class="order-track-item active">
                                                        <i class="icofont-check"></i>
                                                        <span>Pesanan Diterima</span>
                                                    </li>
                                                    <li class="order-track-item active">
                                                        <i class="icofont-check"></i>
                                                        <span>Saldo Diterima</span>
                                                    </li>
                                                    <li class="order-track-item active">
                                                        <i class="icofont-check"></i>
                                                        <span>Pesanaan Sedang Dikirim</span>
                                                    </li>
                                                </ul>
                                            @else
                                                <ul class="order-track-list">
                                                    <li class="order-track-item active">
                                                        <i class="icofont-check"></i>
                                                        <span>Pesanan Diterima</span>
                                                    </li>
                                                    <li class="order-track-item">
                                                        <i class="icofont-close"></i>
                                                        <span>Saldo Tidak Diterima</span>
                                                    </li>
                                                    <li class="order-track-item">
                                                        <i class="icofont-close"></i>
                                                        <span>Pesanaan Sedang Dikirim</span>
                                                    </li>
                                                </ul>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <ul class="orderlist-details">
                                            <li>
                                                <h6>No Faktur</h6>
                                                <p>{{ $isi->no_faktur }}</p>
                                            </li>
                                            <li>
                                                <h6>Tanggal</h6>
                                                <p>{{ $isi->tanggal }}</p>
                                            </li>
                                            <li>
                                                <h6>Biaya Admin</h6>
                                                <p>Rp. 1.000</p>
                                            </li>
                                            <li>
                                                <h6>Total Harga</h6>
                                                <p>Rp. {{ number_format( $isi->total_harga+1000,0,",",".") }}</p>
                                            </li>
                                            <li>
                                                <h6>Diantar Ke</h6>
                                                <p>{{ auth()->user()->alamat }}</p>
                                            </li>
                                        </ul>
                                    </div>
                                    @if ($isi->bukti == 'default.png')
                                        <div class="col-lg-12">
                                            <div class="account-title">
                                                <h4> </h4>
                                                <button data-bs-toggle="modal" data-bs-target="#contact-add{{ $isi->id }}">Kirim Bukti Pembayaran</button>
                                            </div>
                                            <div class="modal fade" id="contact-add{{ $isi->id }}">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                                                        <form class="modal-form" action="/pembeli/bukti/{{ $isi->id }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-title">
                                                                <h3>Kirim Bukti Pembayaran</h3>
                                                            </div>
                                                            <!-- <div class="form-group">
                                                                <label class="form-label">title</label>
                                                                <select class="form-select">
                                                                    <option selected>choose title</option>
                                                                    <option value="primary">primary</option>
                                                                    <option value="secondary">secondary</option>
                                                                </select>
                                                            </div> -->
                                                            <div class="form-group">
                                                                <label class="form-label">Foto</label>
                                                                <input class="form-control @error ('bukti') is-invalid @enderror" type="file" name="bukti">
                                                                @error('bukti')
                                                                    <div class="text-danger">{{$message}}</div>
                                                                @enderror
                                                            </div>
                                                            <button class="form-btn" type="submit">Kirim</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                    @endif
                                    {{-- <div class="col-lg-4">
                                        <ul class="orderlist-details">
                                            <li>
                                                <h6>Sub Total</h6>
                                                <p>$10,864.00</p>
                                            </li>
                                            <li>
                                                <h6>discount</h6>
                                                <p>$20.00</p>
                                            </li>
                                            <li>
                                                <h6>delivery fee</h6>
                                                <p>$49.00</p>
                                            </li>
                                            <li>
                                                <h6>Total<small>(Incl. VAT)</small></h6>
                                                <p>$10,874.00</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="orderlist-deliver">
                                            <h6>Delivery location</h6>
                                            <p>jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
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
                                                    <tr>
                                                        <td class="table-serial">
                                                            <h6>01</h6>
                                                        </td>
                                                        <td class="table-image"><img src="images/product/01.jpg" alt="product">
                                                        </td>
                                                        <td class="table-name">
                                                            <h6>product name</h6>
                                                        </td>
                                                        <td class="table-price">
                                                            <h6>$19<small>/kilo</small></h6>
                                                        </td>
                                                        <td class="table-brand">
                                                            <h6>Fresh Company</h6>
                                                        </td>
                                                        <td class="table-quantity">
                                                            <h6>3</h6>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-serial">
                                                            <h6>02</h6>
                                                        </td>
                                                        <td class="table-image"><img src="images/product/02.jpg" alt="product">
                                                        </td>
                                                        <td class="table-name">
                                                            <h6>product name</h6>
                                                        </td>
                                                        <td class="table-price">
                                                            <h6>$19<small>/kilo</small></h6>
                                                        </td>
                                                        <td class="table-brand">
                                                            <h6>Radhuni Masala</h6>
                                                        </td>
                                                        <td class="table-quantity">
                                                            <h6>5</h6>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-serial">
                                                            <h6>03</h6>
                                                        </td>
                                                        <td class="table-image"><img src="images/product/03.jpg" alt="product">
                                                        </td>
                                                        <td class="table-name">
                                                            <h6>product name</h6>
                                                        </td>
                                                        <td class="table-price">
                                                            <h6>$19<small>/kilo</small></h6>
                                                        </td>
                                                        <td class="table-brand">
                                                            <h6>Pran Prio</h6>
                                                        </td>
                                                        <td class="table-quantity">
                                                            <h6>2</h6>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-serial">
                                                            <h6>04</h6>
                                                        </td>
                                                        <td class="table-image"><img src="images/product/04.jpg" alt="product">
                                                        </td>
                                                        <td class="table-name">
                                                            <h6>product name</h6>
                                                        </td>
                                                        <td class="table-price">
                                                            <h6>$19<small>/kilo</small></h6>
                                                        </td>
                                                        <td class="table-brand">
                                                            <h6>Real Food</h6>
                                                        </td>
                                                        <td class="table-quantity">
                                                            <h6>3</h6>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-serial">
                                                            <h6>05</h6>
                                                        </td>
                                                        <td class="table-image"><img src="images/product/05.jpg" alt="product">
                                                        </td>
                                                        <td class="table-name">
                                                            <h6>product name</h6>
                                                        </td>
                                                        <td class="table-price">
                                                            <h6>$19<small>/kilo</small></h6>
                                                        </td>
                                                        <td class="table-brand">
                                                            <h6>Rdhuni Company</h6>
                                                        </td>
                                                        <td class="table-quantity">
                                                            <h6>7</h6>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    @empty

                    @endforelse

                    {{-- <div class="orderlist">
                        <div class="orderlist-head">
                            <h5>order#02</h5>
                            <h5>order Processed</h5>
                        </div>
                        <div class="orderlist-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="order-track">
                                        <ul class="order-track-list">
                                            <li class="order-track-item active">
                                                <i class="icofont-check"></i>
                                                <span>order recieved</span>
                                            </li>
                                            <li class="order-track-item active">
                                                <i class="icofont-check"></i>
                                                <span>order processed</span>
                                            </li>
                                            <li class="order-track-item">
                                                <i class="icofont-close"></i>
                                                <span>order shipped</span>
                                            </li>
                                            <li class="order-track-item">
                                                <i class="icofont-close"></i>
                                                <span>order delivered</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6>order id</h6>
                                            <p>14667</p>
                                        </li>
                                        <li>
                                            <h6>Total Item</h6>
                                            <p>6 Items</p>
                                        </li>
                                        <li>
                                            <h6>Order Time</h6>
                                            <p>7th February 2021</p>
                                        </li>
                                        <li>
                                            <h6>Delivery Time</h6>
                                            <p>12th February 2021</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6>Sub Total</h6>
                                            <p>$10,864.00</p>
                                        </li>
                                        <li>
                                            <h6>discount</h6>
                                            <p>$20.00</p>
                                        </li>
                                        <li>
                                            <h6>delivery fee</h6>
                                            <p>$49.00</p>
                                        </li>
                                        <li>
                                            <h6>Total<small>(Incl. VAT)</small></h6>
                                            <p>$10,874.00</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <div class="orderlist-deliver">
                                        <h6>Delivery location</h6>
                                        <p>jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
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
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>01</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/01.jpg"
                                                            alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Fresh Company</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>3</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>02</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/02.jpg"
                                                            alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Radhuni Masala</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>5</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>03</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/03.jpg"
                                                            alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Pran Prio</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>2</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>04</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/04.jpg"
                                                            alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Real Food</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>3</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>05</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/05.jpg"
                                                            alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Rdhuni Company</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>7</h6>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="orderlist">
                        <div class="orderlist-head">
                            <h5>order#03</h5>
                            <h5>order shipped</h5>
                        </div>
                        <div class="orderlist-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="order-track">
                                        <ul class="order-track-list">
                                            <li class="order-track-item active">
                                                <i class="icofont-check"></i>
                                                <span>order recieved</span>
                                            </li>
                                            <li class="order-track-item active">
                                                <i class="icofont-check"></i>
                                                <span>order processed</span>
                                            </li>
                                            <li class="order-track-item active">
                                                <i class="icofont-check"></i>
                                                <span>order shipped</span>
                                            </li>
                                            <li class="order-track-item">
                                                <i class="icofont-close"></i>
                                                <span>order delivered</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6>order id</h6>
                                            <p>14667</p>
                                        </li>
                                        <li>
                                            <h6>Total Item</h6>
                                            <p>6 Items</p>
                                        </li>
                                        <li>
                                            <h6>Order Time</h6>
                                            <p>7th February 2021</p>
                                        </li>
                                        <li>
                                            <h6>Delivery Time</h6>
                                            <p>12th February 2021</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6>Sub Total</h6>
                                            <p>$10,864.00</p>
                                        </li>
                                        <li>
                                            <h6>discount</h6>
                                            <p>$20.00</p>
                                        </li>
                                        <li>
                                            <h6>delivery fee</h6>
                                            <p>$49.00</p>
                                        </li>
                                        <li>
                                            <h6>Total<small>(Incl. VAT)</small></h6>
                                            <p>$10,874.00</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <div class="orderlist-deliver">
                                        <h6>Delivery location</h6>
                                        <p>jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
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
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>01</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/01.jpg"
                                                            alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Fresh Company</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>3</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>02</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/02.jpg"
                                                            alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Radhuni Masala</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>5</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>03</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/03.jpg"
                                                            alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Pran Prio</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>2</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>04</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/04.jpg"
                                                            alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Real Food</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>3</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>05</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/05.jpg"
                                                            alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Rdhuni Company</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>7</h6>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="orderlist">
                        <div class="orderlist-head">
                            <h5>order#04</h5>
                            <h5>order delivered</h5>
                        </div>
                        <div class="orderlist-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="order-track">
                                        <ul class="order-track-list">
                                            <li class="order-track-item active">
                                                <i class="icofont-check"></i>
                                                <span>order recieved</span>
                                            </li>
                                            <li class="order-track-item active">
                                                <i class="icofont-check"></i>
                                                <span>order processed</span>
                                            </li>
                                            <li class="order-track-item active">
                                                <i class="icofont-check"></i>
                                                <span>order shipped</span>
                                            </li>
                                            <li class="order-track-item active">
                                                <i class="icofont-check"></i>
                                                <span>order delivered</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6>order id</h6>
                                            <p>14667</p>
                                        </li>
                                        <li>
                                            <h6>Total Item</h6>
                                            <p>6 Items</p>
                                        </li>
                                        <li>
                                            <h6>Order Time</h6>
                                            <p>7th February 2021</p>
                                        </li>
                                        <li>
                                            <h6>Delivery Time</h6>
                                            <p>12th February 2021</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6>Sub Total</h6>
                                            <p>$10,864.00</p>
                                        </li>
                                        <li>
                                            <h6>discount</h6>
                                            <p>$20.00</p>
                                        </li>
                                        <li>
                                            <h6>delivery fee</h6>
                                            <p>$49.00</p>
                                        </li>
                                        <li>
                                            <h6>Total<small>(Incl. VAT)</small></h6>
                                            <p>$10,874.00</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <div class="orderlist-deliver">
                                        <h6>Delivery location</h6>
                                        <p>jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
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
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>01</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/01.jpg"
                                                            alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Fresh Company</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>3</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>02</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/02.jpg"
                                                            alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Radhuni Masala</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>5</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>03</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/03.jpg"
                                                            alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Pran Prio</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>2</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>04</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/04.jpg"
                                                            alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Real Food</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>3</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>05</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/05.jpg"
                                                            alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Rdhuni Company</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>7</h6>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
                <div class="row">
                <div class="col-lg-12">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="icofont-arrow-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">...</li>
                        <li class="page-item"><a class="page-link" href="#">65</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="icofont-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                        ORDERLIST PART END
            =======================================-->

</div>
@endsection
