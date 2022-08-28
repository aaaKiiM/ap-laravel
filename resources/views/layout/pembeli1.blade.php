<!DOCTYPE html>
<html lang="en">
    <head>
        <!--=====================================
                    META TAG PART START
        =======================================-->
        <!-- REQUIRE META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- AUTHOR META -->
        {{-- <meta name="author" content="mironcoder">
        <meta name="email" content="mironcoder@gmail.com">
        <meta name="profile" content="https://themeforest.net/user/mironcoder"> --}}

        <!-- TEMPLATE META -->
        <meta name="name" content="Greeny">
        <meta name="title" content="Greeny - eCommerce HTML Template">
        <meta name="keywords" content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, webshop, farm, grocery, natural, online store">
        <!--=====================================
                    META-TAG PART END
        =======================================-->

        <!-- WEBPAGE TITLE -->
        <title>@yield('title')</title>

        <!--=====================================
                    CSS LINK PART START
        =======================================-->
        <!-- FAVICON -->
        <link rel="icon" href="images/favicon.png">

        <!-- FONTS -->
        <link rel="stylesheet" href="{{ asset('new template/fonts/flaticon/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('new template/fonts/icofont/icofont.min.css') }}">
        <link rel="stylesheet" href="{{ asset('new template/fonts/fontawesome/fontawesome.min.css') }}">

        <!-- VENDOR -->
        <link rel="stylesheet" href="{{ asset('new template/vendor/venobox/venobox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('new template/vendor/slickslider/slick.min.css') }}">
        <link rel="stylesheet" href="{{ asset('new template/vendor/niceselect/nice-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('new template/vendor/bootstrap/bootstrap.min.css') }}">

        <!-- CUSTOM -->
        <link rel="stylesheet" href="{{ asset('new template/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('new template/css/home-category.css') }}">
        <link rel="stylesheet" href="{{ asset('new template/css/checkout.css') }}">
        <link rel="stylesheet" href="{{ asset('new template/css/product-details.css') }}">
        <link rel="stylesheet" href="{{ asset('new template/css/invoice.css') }}">
        <link rel="stylesheet" href="{{ asset('new template/css/orderlist.css') }}">
        <link rel="stylesheet" href="{{ asset('new template/css/profile.css') }}">
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <body>
        <div class="backdrop"></div>
        <a class="backtop fas fa-arrow-up" href="#"></a>

        <!--=====================================
                    HEADER TOP PART START
        =======================================-->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <div class="header-top-welcome">
                            <p>Selamat Datang Di Website Emperor Cake!</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        {{-- <div class="header-top-select">
                            <div class="header-select">
                                <i class="icofont-world"></i>
                                <select class="select">
                                    <option value="english" selected>english</option>
                                    <option value="bangali">bangali</option>
                                    <option value="arabic">arabic</option>
                                </select>
                            </div>
                            <div class="header-select">
                                <i class="icofont-money"></i>
                                <select class="select">
                                    <option value="english" selected>doller</option>
                                    <option value="bangali">pound</option>
                                    <option value="arabic">taka</option>
                                </select>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-md-7 col-lg-4">
                        <ul class="header-top-list">
                            <li><a href="offer.html">offers</a></li>
                            @guest
                                <li><a href="/penjual">Daftar Toko</a></li>
                            @else
                                @if (auth()->user()->is_penjual == 1)
                                <li><a href="/penjual">{{auth()->user()->toko->nama_toko}}</a></li>
                                @else ()
                                    <li><a href="/penjual">Daftar Toko</a></li>
                                @endif
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form></li>
                            @endguest
                            {{-- <li><a href="faq.html">need help</a></li>
                            <li><a href="contact.html">contact us</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================================
                    HEADER TOP PART END
        =======================================-->



        <!--=====================================
                    HEADER PART START
        =======================================-->
        <header class="header-part">
            <div class="container">
                <div class="header-content">
                    <div class="header-media-group">
                        <button class="header-user"><img src="{{ asset('user/default.png') }}" alt="user"></button>
                        <a href="/"><img src="{{ asset('new template/images/logo.png') }}" alt="logo"></a>
                        <button class="header-src"><i class="fas fa-search"></i></button>
                    </div>

                    <a href="/" class="header-logo">
                        <img src="{{ asset('img/Logo.png') }}" alt="logo">
                    </a>
                    @guest
                        <a href="/login" class="header-widget">
                            <img src="{{ asset('user/default.png') }}" alt="user">
                            <span>Login</span>
                        </a>
                    @else
                        <ul class="navbar-list">
                            <li class="navbar-item dropdown">
                                <a href="/profile" class="header-widget">
                                    <img src="{{ asset('user/'.auth()->user()->foto) }}" alt="user">
                                    <span>{{auth()->user()->nama}}</span>
                                </a>
                                <ul class="dropdown-position-list">
                                    <li><a href="/profile">Profile Akun</a></li>
                                    <li><a href="/riwayatpesan">Riwayat Pesanan</a></li>
                                </ul>
                            </li>
                        </ul>
                    @endguest

                    <form class="header-form">
                        <input type="text" placeholder="Search anything...">
                        <button><i class="fas fa-search"></i></button>
                    </form>

                    <div class="header-widget-group">
                        {{-- <a href="compare.html" class="header-widget" title="Compare List">
                            <i class="fas fa-random"></i>
                            <sup>0</sup>
                        </a> --}}
                        {{-- <a href="wishlist.html" class="header-widget" title="Wishlist">
                            <i class="fas fa-heart"></i>
                            <sup>0</sup>
                        </a> --}}
                        <a href="/checkout" class="header-widget header-cart" title="Cartlist">
                            <i class="fas fa-shopping-basket"></i>
                            @guest
                                <sup>0</sup>
                                <span>Total Harga<small>Rp. 0</small></span>
                            @else
                                <?php
                                    $pesan = \App\Models\Pesan::where('users_id', Auth::user()->id)->where('status',0)->first();
                                    $jumlah = \App\Models\Pesan::where('users_id', Auth::user()->id)->where('status',0)->first();
                                    if (!empty($pesan)) {
                                        $notif = \App\Models\PesanDetail::where('pesans_id', $pesan->id)->count();
                                    }
                                ?>
                                <sup>
                                    @if (!empty($notif))
                                        {{ $notif }}
                                    @else
                                        0
                                    @endif
                                </sup>
                                <span>Total Harga
                                    @if (!empty($jumlah))
                                        <small>Rp. {{ number_format( $jumlah->total_harga,0,",",".") }}</small>
                                    @else
                                        <small>Rp. 0</small>
                                    @endif
                                </span>
                            @endguest
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!--=====================================
                    HEADER PART END
        =======================================-->


        <!--=====================================
                    NAVBAR PART START
        =======================================-->
        {{-- <nav class="navbar-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-content">
                            <ul class="navbar-list">
                                <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown-arrow" href="#">home</a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="home-grid.html">Home grid</a></li>
                                        <li><a href="index.html">Home index</a></li>
                                        <li><a href="home-classic.html">Home classic</a></li>
                                        <li><a href="home-standard.html">Home standard</a></li>
                                        <li><a href="home-category.html">Home category</a></li>
                                    </ul>
                                </li>
                                <li class="navbar-item dropdown-megamenu">
                                    <a class="navbar-link dropdown-arrow" href="#">shop</a>
                                    <div class="megamenu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">shop pages</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="shop-5column.html">shop 5 column</a></li>
                                                            <li><a href="shop-4column.html">shop 4 column</a></li>
                                                            <li><a href="shop-3column.html">shop 3 column</a></li>
                                                            <li><a href="shop-2column.html">shop 2 column</a></li>
                                                            <li><a href="shop-1column.html">shop 1 column</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">product pages</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="product-tab.html">product single tab</a></li>
                                                            <li><a href="product-grid.html">product single grid</a></li>
                                                            <li><a href="product-video.html">product single video</a></li>
                                                            <li><a href="product-simple.html">product single simple</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">user action</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="wishlist.html">wishlist</a></li>
                                                            <li><a href="compare.html">compare</a></li>
                                                            <li><a href="checkout.html">checkout</a></li>
                                                            <li><a href="orderlist.html">order history</a></li>
                                                            <li><a href="invoice.html">order invoice</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">other pages</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="all-category.html">all Category</a></li>
                                                            <li><a href="brand-list.html">brand list</a></li>
                                                            <li><a href="brand-single.html">brand single</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="navbar-item dropdown-megamenu">
                                    <a class="navbar-link dropdown-arrow" href="#">category</a>
                                    <div class="megamenu">
                                        <div class="container">
                                            <div class="row row-cols-5">
                                                <div class="col">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">vegetables</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="#">carrot</a></li>
                                                            <li><a href="#">broccoli</a></li>
                                                            <li><a href="#">asparagus</a></li>
                                                            <li><a href="#">cauliflower</a></li>
                                                            <li><a href="#">eggplant</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">fruits</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="#">Apple</a></li>
                                                            <li><a href="#">orange</a></li>
                                                            <li><a href="#">banana</a></li>
                                                            <li><a href="#">strawberrie</a></li>
                                                            <li><a href="#">watermelon</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">dairy farms</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="#">Butter</a></li>
                                                            <li><a href="#">Cheese</a></li>
                                                            <li><a href="#">Milk</a></li>
                                                            <li><a href="#">Eggs</a></li>
                                                            <li><a href="#">cream</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">seafoods</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="#">Lobster</a></li>
                                                            <li><a href="#">Octopus</a></li>
                                                            <li><a href="#">Shrimp</a></li>
                                                            <li><a href="#">Halabos</a></li>
                                                            <li><a href="#">Maeuntang</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">diet foods</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="#">Salmon</a></li>
                                                            <li><a href="#">Avocados</a></li>
                                                            <li><a href="#">Leafy Greens</a></li>
                                                            <li><a href="#">Boiled Potatoes</a></li>
                                                            <li><a href="#">Cottage Cheese</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">fast foods</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="#">burger</a></li>
                                                            <li><a href="#">milkshake</a></li>
                                                            <li><a href="#">sandwich</a></li>
                                                            <li><a href="#">doughnut</a></li>
                                                            <li><a href="#">pizza</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">drinks</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="#">cocktail</a></li>
                                                            <li><a href="#">hard soda</a></li>
                                                            <li><a href="#">shampain</a></li>
                                                            <li><a href="#">Wine</a></li>
                                                            <li><a href="#">barley</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">meats</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="#">Meatball</a></li>
                                                            <li><a href="#">Sausage</a></li>
                                                            <li><a href="#">Poultry</a></li>
                                                            <li><a href="#">chicken</a></li>
                                                            <li><a href="#">Cows</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">fishes</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="#">scads</a></li>
                                                            <li><a href="#">pomfret</a></li>
                                                            <li><a href="#">groupers</a></li>
                                                            <li><a href="#">anchovy</a></li>
                                                            <li><a href="#">mackerel</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">dry foods</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="#">noodles</a></li>
                                                            <li><a href="#">Powdered milk</a></li>
                                                            <li><a href="#">nut & yeast</a></li>
                                                            <li><a href="#">almonds</a></li>
                                                            <li><a href="#">pumpkin</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown-arrow" href="#">pages</a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="faq.html">faqs</a></li>
                                        <li><a href="offer.html">offers</a></li>
                                        <li><a href="profile.html">my profile</a></li>
                                        <li><a href="wallet.html">my wallet</a></li>
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="contact.html">contact us</a></li>
                                        <li><a href="privacy.html">privacy policy</a></li>
                                        <li><a href="coming-soon.html">coming soon</a></li>
                                        <li><a href="blank-page.html">blank page</a></li>
                                        <li><a href="error.html">404 Error</a></li>
                                        <li><a href="email-template.html">email template</a></li>
                                    </ul>
                                </li>
                                <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown-arrow" href="#">authentic</a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="reset-password.html">reset password</a></li>
                                        <li><a href="change-password.html">change password</a></li>
                                    </ul>
                                </li>
                                <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown-arrow" href="#">blogs</a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="blog-grid.html">blog grid</a></li>
                                        <li><a href="blog-standard.html">blog standard</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-author.html">blog author</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="navbar-info-group">
                                <div class="navbar-info">
                                    <i class="icofont-ui-touch-phone"></i>
                                    <p>
                                        <small>call us</small>
                                        <span>(+880) 183 8288 389</span>
                                    </p>
                                </div>
                                <div class="navbar-info">
                                    <i class="icofont-ui-email"></i>
                                    <p>
                                        <small>email us</small>
                                        <span>support@greeny.com</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav> --}}
        <!--=====================================
                    NAVBAR PART END
        =======================================-->



        <!--=====================================
                CATEGORY SIDEBAR PART START
        =======================================-->
        <aside class="category-sidebar">
            <div class="category-header">
                <h4 class="category-title">
                    <i class="fas fa-align-left"></i>
                    <span>categories</span>
                </h4>
                <button class="category-close"><i class="icofont-close"></i></button>
            </div>
            <ul class="category-list">
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-vegetable"></i>
                        <span>vegetables</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">asparagus</a></li>
                        <li><a href="#">broccoli</a></li>
                        <li><a href="#">carrot</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-groceries"></i>
                        <span>groceries</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Grains & Bread</a></li>
                        <li><a href="#">Dairy & Eggs</a></li>
                        <li><a href="#">Oil & Fat</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-fruit"></i>
                        <span>fruits</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Apple</a></li>
                        <li><a href="#">Orange</a></li>
                        <li><a href="#">Strawberry</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-dairy-products"></i>
                        <span>dairy farm</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Egg</a></li>
                        <li><a href="#">milk</a></li>
                        <li><a href="#">butter</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-crab"></i>
                        <span>sea foods</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Lobster</a></li>
                        <li><a href="#">Octopus</a></li>
                        <li><a href="#">Shrimp</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-salad"></i>
                        <span>diet foods</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Salmon</a></li>
                        <li><a href="#">Potatoes</a></li>
                        <li><a href="#">Greens</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-dried-fruit"></i>
                        <span>dry foods</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">noodles</a></li>
                        <li><a href="#">Powdered milk</a></li>
                        <li><a href="#">nut & yeast</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-fast-food"></i>
                        <span>fast foods</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">mango</a></li>
                        <li><a href="#">plumsor</a></li>
                        <li><a href="#">raisins</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-cheers"></i>
                        <span>drinks</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Wine</a></li>
                        <li><a href="#">Juice</a></li>
                        <li><a href="#">Water</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-beverage"></i>
                        <span>coffee</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Cappuchino</a></li>
                        <li><a href="#">Espresso</a></li>
                        <li><a href="#">Latte</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-barbecue"></i>
                        <span>meats</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Meatball</a></li>
                        <li><a href="#">Sausage</a></li>
                        <li><a href="#">Poultry</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-fish"></i>
                        <span>fishes</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Agujjim</a></li>
                        <li><a href="#">saltfish</a></li>
                        <li><a href="#">pazza</a></li>
                    </ul>
                </li>
            </ul>
            <div class="category-footer">
                <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
            </div>
        </aside>
        <!--=====================================
                CATEGORY SIDEBAR PART END
        =======================================-->


        <!--=====================================
                    CART SIDEBAR PART START
        =======================================-->
        {{-- <aside class="cart-sidebar">
            <div class="cart-header">
                <div class="cart-total">
                    <i class="fas fa-shopping-basket"></i>
                    @guest
                        <span>Total Produk (0)</span>
                    @else
                        <?php
                            $pesan = \App\Models\Pesan::where('users_id', Auth::user()->id)->where('status',0)->first();
                            if (!empty($pesan)) {
                                $notif = \App\Models\PesanDetail::where('pesans_id', $pesan->id)->count();
                            }
                        ?>
                        <span>
                            @if (!empty($notif))
                                Total Produk ({{ $notif }})
                            @else
                                Total Produk (0)
                            @endif
                        </span>
                    @endguest
                </div>
                <button class="cart-close"><i class="icofont-close"></i></button>
            </div>
            <ul class="cart-list">
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="images/product/01.jpg" alt="product"></a>
                        <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6><a href="product-single.html">existing product name</a></h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="images/product/02.jpg" alt="product"></a>
                        <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6><a href="product-single.html">existing product name</a></h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="images/product/03.jpg" alt="product"></a>
                        <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6><a href="product-single.html">existing product name</a></h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="images/product/04.jpg" alt="product"></a>
                        <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6><a href="product-single.html">existing product name</a></h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="images/product/05.jpg" alt="product"></a>
                        <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6><a href="product-single.html">existing product name</a></h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="cart-footer">
                <button class="coupon-btn">Do you have a coupon code?</button>
                <form class="coupon-form">
                    <input type="text" placeholder="Enter your coupon code">
                    <button type="submit"><span>apply</span></button>
                </form>
                <a class="cart-checkout-btn" href="checkout.html">
                    <span class="checkout-label">Proceed to Checkout</span>
                    <span class="checkout-price">$369.78</span>
                </a>
            </div>
        </aside> --}}
        <!--=====================================
                    CART SIDEBAR PART END
        =======================================-->


        <!--=====================================
                    NAV SIDEBAR PART START
        =======================================-->
        <aside class="nav-sidebar">
            <div class="nav-header">
                <a href="#"><img src="images/logo.png" alt="logo"></a>
                <button class="nav-close"><i class="icofont-close"></i></button>
            </div>
            <div class="nav-content">
                {{-- <div class="nav-btn">
                    <a href="login.html" class="btn btn-inline">
                        <i class="fa fa-unlock-alt"></i>
                        <span>join here</span>
                    </a>
                </div> --}}
                <!-- This commentable code show when user login or register -->
                <div class="nav-profile">
                    <a class="nav-user" href="#"><img src="images/user.png" alt="user"></a>
                    <h4 class="nav-name"><a href="profile.html">Miron Mahmud</a></h4>
                </div>
                <div class="nav-select-group">
                    <div class="nav-select">
                        <i class="icofont-world"></i>
                        <select class="select">
                            <option value="english" selected>English</option>
                            <option value="bangali">Bangali</option>
                            <option value="arabic">Arabic</option>
                        </select>
                    </div>
                    <div class="nav-select">
                        <i class="icofont-money"></i>
                        <select class="select">
                            <option value="english" selected>Doller</option>
                            <option value="bangali">Pound</option>
                            <option value="arabic">Taka</option>
                        </select>
                    </div>
                </div>
                <ul class="nav-list">
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-home"></i>Home</a>
                        <ul class="dropdown-list">
                            <li><a href="home-grid.html">Home grid</a></li>
                            <li><a href="index.html">Home index</a></li>
                            <li><a href="home-classic.html">Home classic</a></li>
                            <li><a href="home-standard.html">Home standard</a></li>
                            <li><a href="home-category.html">Home category</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>shop</a>
                        <ul class="dropdown-list">
                            <li><a href="shop-5column.html">shop 5 column</a></li>
                            <li><a href="shop-4column.html">shop 4 column</a></li>
                            <li><a href="shop-3column.html">shop 3 column</a></li>
                            <li><a href="shop-2column.html">shop 2 column</a></li>
                            <li><a href="shop-1column.html">shop 1 column</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-page"></i>product</a>
                        <ul class="dropdown-list">
                            <li><a href="product-tab.html">product tab</a></li>
                            <li><a href="product-grid.html">product grid</a></li>
                            <li><a href="product-video.html">product video</a></li>
                            <li><a href="product-simple.html">product simple</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-bag-alt"></i>my account</a>
                        <ul class="dropdown-list">
                            <li><a href="profile.html">profile</a></li>
                            <li><a href="wallet.html">wallet</a></li>
                            <li><a href="wishlist.html">wishlist</a></li>
                            <li><a href="compare.html">compare</a></li>
                            <li><a href="checkout.html">checkout</a></li>
                            <li><a href="orderlist.html">order history</a></li>
                            <li><a href="invoice.html">order invoice</a></li>
                            <li><a href="email-template.html">email template</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-lock"></i>authentic</a>
                        <ul class="dropdown-list">
                            <li><a href="login.html">login</a></li>
                            <li><a href="register.html">register</a></li>
                            <li><a href="reset-password.html">reset password</a></li>
                            <li><a href="change-password.html">change password</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-book-alt"></i>blogs</a>
                        <ul class="dropdown-list">
                            <li><a href="blog-grid.html">blog grid</a></li>
                            <li><a href="blog-standard.html">blog standard</a></li>
                            <li><a href="blog-details.html">blog details</a></li>
                            <li><a href="blog-author.html">blog author</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="offer.html"><i class="icofont-sale-discount"></i>offers</a></li>
                    <li><a class="nav-link" href="about.html"><i class="icofont-info-circle"></i>about us</a></li>
                    <li><a class="nav-link" href="faq.html"><i class="icofont-support-faq"></i>need help</a></li>
                    <li><a class="nav-link" href="contact.html"><i class="icofont-contacts"></i>contact us</a></li>
                    <li><a class="nav-link" href="privacy.html"><i class="icofont-warning"></i>privacy policy</a></li>
                    <li><a class="nav-link" href="coming-soon.html"><i class="icofont-options"></i>coming soon</a></li>
                    <li><a class="nav-link" href="error.html"><i class="icofont-ui-block"></i>404 error</a></li>
                    <li><a class="nav-link" href="login.html"><i class="icofont-logout"></i>logout</a></li>
                </ul>
                <div class="nav-info-group">
                    <div class="nav-info">
                        <i class="icofont-ui-touch-phone"></i>
                        <p>
                            <small>call us</small>
                            <span>(+880) 183 8288 389</span>
                        </p>
                    </div>
                    <div class="nav-info">
                        <i class="icofont-ui-email"></i>
                        <p>
                            <small>email us</small>
                            <span>support@greeny.com</span>
                        </p>
                    </div>
                </div>
                <div class="nav-footer">
                    <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
                </div>
            </div>
        </aside>
        <!--=====================================
                    NAV SIDEBAR PART END
        =======================================-->


        <!--=====================================
                    MOBILE-MENU PART START
        =======================================-->
        <div class="mobile-menu">
            <a href="/" title="Home Page">
                <i class="fas fa-home"></i>
                <span>Beranda</span>
            </a>
            <button class="cart-btn" title="Cartlist">
                <i class="fas fa-shopping-basket"></i>
                <span>cartlist</span>
                <sup>9+</sup>
            </button>
            <a href="wishlist.html" title="Wishlist">
                <i class="fas fa-heart"></i>
                <span>wishlist</span>
                <sup>0</sup>
            </a>
            <a href="compare.html" title="Compare List">
                <i class="fas fa-random"></i>
                <span>compare</span>
                <sup>0</sup>
            </a>
        </div>
        <!--=====================================
                    MOBILE-MENU PART END
        =======================================-->

        @yield('content')

        <!--=====================================
                    INTRO PART START
        =======================================-->
        <section class="intro-part">
            <div class="container">
                <div class="row intro-content">
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="intro-content">
                                <h5>free home delivery</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <div class="intro-content">
                                <h5>instant return policy</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="intro-content">
                                <h5>quick support system</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="intro-content">
                                <h5>secure payment way</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    INTRO PART END
        =======================================-->


        <!--=====================================
                     FOOTER PART START
        =======================================-->
        <footer class="footer-part">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <a class="footer-logo" href="#">
                                <img src="images/logo.png" alt="logo">
                            </a>
                            <p class="footer-desc">Adipisci asperiores ipsum ipsa repellat consequatur repudiandae quisquam assumenda dolor perspiciatis sit ipsum dolor amet.</p>
                            <ul class="footer-social">
                                <li><a class="icofont-facebook" href="#"></a></li>
                                <li><a class="icofont-twitter" href="#"></a></li>
                                <li><a class="icofont-linkedin" href="#"></a></li>
                                <li><a class="icofont-instagram" href="#"></a></li>
                                <li><a class="icofont-pinterest" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget contact">
                            <h3 class="footer-title">contact us</h3>
                            <ul class="footer-contact">
                                <li>
                                    <i class="icofont-ui-email"></i>
                                    <p>
                                        <span>support@greeny.com</span>
                                        <span>carrer@greeny.com</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="icofont-ui-touch-phone"></i>
                                    <p>
                                        <span>+120 279 532 13</span>
                                        <span>+120 279 532 14</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <p>1Hd- 50, 010 Avenue, NY 90001 United States</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-title">quick Links</h3>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Best Seller</a></li>
                                    <li><a href="#">New Arrivals</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Location</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Carrer</a></li>
                                    <li><a href="#">Faq</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-title">Download App</h3>
                            <p class="footer-desc">Lorem ipsum dolor sit amet tenetur dignissimos ipsum eligendi autem obcaecati minus ducimus totam reprehenderit exercitationem!</p>
                            <div class="footer-app">
                                <a href="#"><img src="images/google-store.png" alt="google"></a>
                                <a href="#"><img src="images/app-store.png" alt="app"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom">
                            <p class="footer-copytext">&copy;  All Copyrights Reserved by <a target="_blank" href="https://themeforest.net/user/mironcoder">Mironcoder</a></p>
                            <div class="footer-card">
                                <a href="#"><img src="images/payment/jpg/01.jpg" alt="payment"></a>
                                <a href="#"><img src="images/payment/jpg/02.jpg" alt="payment"></a>
                                <a href="#"><img src="images/payment/jpg/03.jpg" alt="payment"></a>
                                <a href="#"><img src="images/payment/jpg/04.jpg" alt="payment"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--=====================================
                      FOOTER PART END
        =======================================-->


        <!--=====================================
                    JS LINK PART START
        =======================================-->
        <!-- VENDOR -->
        <script src="{{ asset('new template/vendor/bootstrap/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('new template/vendor/bootstrap/popper.min.js') }}"></script>
        <script src="{{ asset('new template/vendor/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('new template/vendor/countdown/countdown.min.js') }}"></script>
        <script src="{{ asset('new template/vendor/niceselect/nice-select.min.js') }}"></script>
        <script src="{{ asset('new template/vendor/slickslider/slick.min.js') }}"></script>
        <script src="{{ asset('new template/vendor/venobox/venobox.min.js') }}"></script>

        <!-- CUSTOM -->
        <script src="{{ asset('new template/js/nice-select.js') }}"></script>
        <script src="{{ asset('new template/js/countdown.js') }}"></script>
        <script src="{{ asset('new template/js/accordion.js') }}"></script>
        <script src="{{ asset('new template/js/venobox.js') }}"></script>
        <script src="{{ asset('new template/js/slick.js') }}"></script>
        <script src="{{ asset('new template/js/main.js') }}"></script>
        <!--=====================================
                    JS LINK PART END
        =======================================-->
    </body>
</html>






