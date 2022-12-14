@extends('layout.pembeli1')
@section('title','Dashboard')
@section('content')
    <!--=====================================
                        PRODUCT VIEW START
            =======================================-->
    {{-- <div class="modal fade" id="product-view">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="view-gallery">
                                <div class="view-label-group">
                                    <label class="view-label new">new</label>
                                    <label class="view-label off">-10%</label>
                                </div>
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                </ul>
                                <ul class="thumb-slider">
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name">
                                    <a href="product-video.html">existing product name</a>
                                </h3>
                                <div class="view-meta">
                                    <p>SKU:<span>1234567</span></p>
                                    <p>BRAND:<a href="#">radhuni</a></p>
                                </div>
                                <div class="view-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3 reviews)</a>
                                </div>
                                <h3 class="view-price">
                                    <del>$38.00</del>
                                    <span>$24.00<small>/per kilo</small></span>
                                </h3>
                                <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora
                                    magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit
                                    fuga</p>
                                <div class="view-list-group">
                                    <label class="view-list-title">tags:</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">organic</a></li>
                                        <li><a href="#">vegetable</a></li>
                                        <li><a href="#">chilis</a></li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Share:</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>
                                <div class="view-add-group">
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add to cart</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                            value="1">
                                        <button class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button>
                                    </div>
                                </div>
                                <div class="view-action-group">
                                    <a class="view-wish wish" href="#" title="Add Your Wishlist">
                                        <i class="icofont-heart"></i>
                                        <span>add to wish</span>
                                    </a>
                                    <a class="view-compare" href="compare.html" title="Compare This Item">
                                        <i class="fas fa-random"></i>
                                        <span>Compare This</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--=====================================
                        PRODUCT VIEW END
            =======================================-->


    <!--=====================================
                        SUGGEST PART START
            =======================================-->
    <section class="suggest-part">
        <div class="container">
            {{-- <ul class="suggest-slider slider-arrow">
                @forelse ($kategori as $isi)
                    <li>
                        <a class="suggest-card" href="shop-4column.html">
                            <img src="kategori/{{$isi->foto}}" alt="suggest">
                            <h5>{{ $isi->kategori }}</h5>
                        </a>
                    </li>
                @empty

                @endforelse
            </ul> --}}
        </div>
    </section>
    <!--=====================================
                        SUGGEST PART END
            =======================================-->


    <!--=====================================
                        BANNER PART START
            =======================================-->
    <div class="banner-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="home-category-slider slider-arrow slider-dots">
                        <a href="#"><img src="{{ asset('img/banner/Banner1.png') }}" alt="banner"></a>
                        <a href="#"><img src="{{ asset('img/banner/Banner2.png') }}" alt="banner"></a>
                        <a href="#"><img src="{{ asset('img/banner/Banner3.png') }}" alt="banner"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================
                        BANNER PART END
            =======================================-->


    <!--=====================================
                        PROMOTION PART START
            =======================================-->
    {{-- <div class="section promo-part">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="promo-img">
                            <a href=""><img src="images/promo/home/06.jpg" alt="promo"></a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="promo-img">
                            <a href=""><img src="images/promo/home/07.jpg" alt="promo"></a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="promo-img">
                            <a href=""><img src="images/promo/home/08.jpg" alt="promo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!--=====================================
                        PROMOTION PART END
            =======================================-->

    <!--=====================================
                        RECENT PART START
            =======================================-->
    <section class="section recent-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Produk Yang Berkategori {{ $kategori->kategori }}</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                @forelse ( $produk as $isi)
                    <div class="col">
                        @if ($isi->stock == 0)
                            <div class="product-card product-disable">
                        @else
                            <div class="product-card">
                        @endif
                            <div class="product-media">
                                {{-- <div class="product-label">
                                    <label class="label-text sale">sale</label>
                                </div> --}}
                                {{-- <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button> --}}
                                <a class="product-image" href="product-video.html">
                                    <img src="{{ asset('produk/'.$isi->foto) }}" alt="product">
                                </a>
                                <div class="product-widget">
                                    <!-- <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a> -->
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view{{ $isi->id }}"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="/pembeli/show/{{$isi->id}}">{{ $isi->nama_kue }}</a>
                                </h6>
                                <h6 class="product-price">
                                    {{-- <del>$34</del> --}}
                                    {{-- <span>$28<small>/piece</small></span> --}}
                                    <span>Rp. {{ number_format( $isi->harga,0,",",".") }}</span>
                                </h6>
                                <a class="product-add" title="Add to Cart" href="/pembeli/show/{{$isi->id}}">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>Beli</span>
                                </a>
                                {{-- <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button> --}}
                                {{-- <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                        value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="product-view{{ $isi->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                                <div class="product-view">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="view-gallery">
                                                {{-- <div class="view-label-group">
                                                    <label class="view-label new">new</label>
                                                    <label class="view-label off">-10%</label>
                                                </div> --}}
                                                <ul class="preview-slider slider-arrow">
                                                    <li><img src="{{ asset('produk/'.$isi->foto) }}" alt="product"></li>
                                                    {{-- <li><img src="images/product/01.jpg" alt="product"></li>
                                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                                    <li><img src="images/product/01.jpg" alt="product"></li> --}}
                                                </ul>
                                                <ul class="thumb-slider">
                                                    {{-- <li><img src="{{ asset('produk/'.$isi->foto) }}" alt="product"></li> --}}
                                                    {{-- <li><img src="images/product/01.jpg" alt="product"></li>
                                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                                    <li><img src="images/product/01.jpg" alt="product"></li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="view-details">
                                                <h3 class="view-name">
                                                    <a href="/pembeli/show/{{$isi->id}}">{{ $isi->nama_kue }}</a>
                                                </h3>
                                                <div class="view-meta">
                                                    <p>Stock :<span>{{ $isi->stock}}</span></p>
                                                    <p>Toko :<a href="#">{{ $isi->toko->nama_toko}}</a>
                                                </div>
                                                {{-- <div class="view-rating">
                                                    <i class="active icofont-star"></i>
                                                    <i class="active icofont-star"></i>
                                                    <i class="active icofont-star"></i>
                                                    <i class="active icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <a href="product-video.html">(3 reviews)</a>
                                                </div> --}}
                                                <h3 class="view-price">
                                                    <span>Rp. {{ number_format( $isi->harga,0,",",".") }}</span>
                                                </h3>
                                                <p class="view-desc">{{ $isi->keterangan }}</p>
                                                <div class="view-list-group">
                                                    <label class="view-list-title">Kategori :</label>
                                                    <ul class="view-tag-list">
                                                        <li><a href="/kategori/{{ $isi->kategoris->id }}">{{ $isi->kategoris->kategori }}</a></li>
                                                    </ul>
                                                </div>
                                                {{-- <div class="view-list-group">
                                                    <label class="view-list-title">Share:</label>
                                                    <ul class="view-share-list">
                                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                                        <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                                    </ul>
                                                </div> --}}
                                                <form action="/pesan/{{ $isi->id }}" method="POST">
                                                    @csrf
                                                    <div class="view-add-group">
                                                        <button type="button" class="product-add" title="Add to Cart">
                                                            <i class="fas fa-shopping-basket"></i>
                                                            <span>Jumlah</span>
                                                        </button>
                                                        <div class="product-action">
                                                            <input type="hidden" name="toko" value="{{ $isi->toko->users_id }}">
                                                            <button type="button" class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                                            <input class="action-input" title="Quantity Number" type="text" name="qty" value="1">
                                                            <button type="button" class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="view-action-group-button">
                                                        <button type="submit" class="view-compare" title="Add Your Wishlist">
                                                            <i class="fas fa-shopping-basket"></i>
                                                            <span>Tambah Ke Keranjang</span>
                                                        </button>
                                                        {{-- <a class="view-compare" href="compare.html" title="Compare This Item">
                                                            <i class="fas fa-random"></i>
                                                            <span>Compare This</span>
                                                        </a> --}}
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
                {{-- <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label">
                                <label class="label-text sale">sale</label>
                                <label class="label-text new">new</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.html">
                                <img src="images/product/1145723.png" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.html">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.html">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>$34</del>
                                <span>$28<small>/piece</small></span>
                            </h6>
                            <button class="product-add" title="Add to Cart">
                                <i class="fas fa-shopping-basket"></i>
                                <span>add</span>
                            </button>
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                    value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label">
                                <label class="label-text sale">sale</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.html">
                                <img src="images/product/1225564.png" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.html">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.html">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>$34</del>
                                <span>$28<small>/piece</small></span>
                            </h6>
                            <button class="product-add" title="Add to Cart">
                                <i class="fas fa-shopping-basket"></i>
                                <span>add</span>
                            </button>
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                    value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label">
                                <label class="label-text sale">sale</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.html">
                                <img src="images/product/04.jpg" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.html">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.html">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>$34</del>
                                <span>$28<small>/piece</small></span>
                            </h6>
                            <button class="product-add" title="Add to Cart">
                                <i class="fas fa-shopping-basket"></i>
                                <span>add</span>
                            </button>
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                    value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label">
                                <label class="label-text sale">sale</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.html">
                                <img src="images/product/05.jpg" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.html">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.html">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>$34</del>
                                <span>$28<small>/piece</small></span>
                            </h6>
                            <button class="product-add" title="Add to Cart">
                                <i class="fas fa-shopping-basket"></i>
                                <span>add</span>
                            </button>
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                    value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label">
                                <label class="label-text sale">sale</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.html">
                                <img src="images/product/06.jpg" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.html">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.html">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>$34</del>
                                <span>$28<small>/piece</small></span>
                            </h6>
                            <button class="product-add" title="Add to Cart">
                                <i class="fas fa-shopping-basket"></i>
                                <span>add</span>
                            </button>
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                    value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label">
                                <label class="label-text sale">sale</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.html">
                                <img src="images/product/07.jpg" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.html">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.html">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>$34</del>
                                <span>$28<small>/piece</small></span>
                            </h6>
                            <button class="product-add" title="Add to Cart">
                                <i class="fas fa-shopping-basket"></i>
                                <span>add</span>
                            </button>
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                    value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label">
                                <label class="label-text sale">sale</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.html">
                                <img src="images/product/08.jpg" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.html">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.html">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>$34</del>
                                <span>$28<small>/piece</small></span>
                            </h6>
                            <button class="product-add" title="Add to Cart">
                                <i class="fas fa-shopping-basket"></i>
                                <span>add</span>
                            </button>
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                    value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label">
                                <label class="label-text sale">sale</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.html">
                                <img src="images/product/09.jpg" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.html">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.html">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>$34</del>
                                <span>$28<small>/piece</small></span>
                            </h6>
                            <button class="product-add" title="Add to Cart">
                                <i class="fas fa-shopping-basket"></i>
                                <span>add</span>
                            </button>
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                    value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label">
                                <label class="label-text sale">sale</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.html">
                                <img src="images/product/10.jpg" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.html">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.html">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>$34</del>
                                <span>$28<small>/piece</small></span>
                            </h6>
                            <button class="product-add" title="Add to Cart">
                                <i class="fas fa-shopping-basket"></i>
                                <span>add</span>
                            </button>
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                    value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25">
                        <a href="shop-4column.html" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>show more</span>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!--=====================================
                        RECENT PART END
            =======================================-->


    <!--=====================================
                        PROMOTION PART START
            =======================================-->
    <div class="section promo-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="promo-img">
                        <a href=""><img src="{{ asset('new template/images/promo/home/5740583.jpg') }}" alt="promo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================
                        PROMOTION PART END
            =======================================-->


    <!--=====================================
                        FEATURED PART START
            =======================================-->
    {{-- <section class="section feature-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>our featured items</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label">
                                <label class="label-text feat">feature</label>
                            </div>
                            <button class="feature-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="feature-image" href="product-video.html">
                                <img src="images/product/09.jpg" alt="product">
                            </a>
                            <div class="feature-widget">
                                <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name">
                                <a href="product-video.html">fresh organic green chilis</a>
                            </h6>
                            <div class="feature-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.html">(3 Reviews)</a>
                            </div>
                            <h6 class="feature-price">
                                <del>$34</del>
                                <span>$28<small>/piece</small></span>
                            </h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor
                                ut eveniet commodi...</p>
                            <button class="product-add" title="Add to Cart">
                                <i class="fas fa-shopping-basket"></i>
                                <span>add</span>
                            </button>
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                    value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label">
                                <label class="label-text feat">feature</label>
                            </div>
                            <button class="feature-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="feature-image" href="product-video.html">
                                <img src="images/product/10.jpg" alt="product">
                            </a>
                            <div class="feature-widget">
                                <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name">
                                <a href="product-video.html">fresh organic green chilis</a>
                            </h6>
                            <div class="feature-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.html">(3 Reviews)</a>
                            </div>
                            <h6 class="feature-price">
                                <del>$34</del>
                                <span>$28<small>/piece</small></span>
                            </h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor
                                ut eveniet commodi...</p>
                            <button class="product-add" title="Add to Cart">
                                <i class="fas fa-shopping-basket"></i>
                                <span>add</span>
                            </button>
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                    value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label">
                                <label class="label-text feat">feature</label>
                            </div>
                            <button class="feature-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="feature-image" href="product-video.html">
                                <img src="images/product/11.jpg" alt="product">
                            </a>
                            <div class="feature-widget">
                                <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name">
                                <a href="product-video.html">fresh organic green chilis</a>
                            </h6>
                            <div class="feature-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.html">(3 Reviews)</a>
                            </div>
                            <h6 class="feature-price">
                                <del>$34</del>
                                <span>$28<small>/piece</small></span>
                            </h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor
                                ut eveniet commodi...</p>
                            <button class="product-add" title="Add to Cart">
                                <i class="fas fa-shopping-basket"></i>
                                <span>add</span>
                            </button>
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                    value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label">
                                <label class="label-text feat">feature</label>
                            </div>
                            <button class="feature-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="feature-image" href="product-video.html">
                                <img src="images/product/12.jpg" alt="product">
                            </a>
                            <div class="feature-widget">
                                <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name">
                                <a href="product-video.html">fresh organic green chilis</a>
                            </h6>
                            <div class="feature-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.html">(3 Reviews)</a>
                            </div>
                            <h6 class="feature-price">
                                <del>$34</del>
                                <span>$28<small>/piece</small></span>
                            </h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor
                                ut eveniet commodi...</p>
                            <button class="product-add" title="Add to Cart">
                                <i class="fas fa-shopping-basket"></i>
                                <span>add</span>
                            </button>
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                    value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label">
                                <label class="label-text feat">feature</label>
                            </div>
                            <button class="feature-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="feature-image" href="product-video.html">
                                <img src="images/product/13.jpg" alt="product">
                            </a>
                            <div class="feature-widget">
                                <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name">
                                <a href="product-video.html">fresh organic green chilis</a>
                            </h6>
                            <div class="feature-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.html">(3 Reviews)</a>
                            </div>
                            <h6 class="feature-price">
                                <del>$34</del>
                                <span>$28<small>/piece</small></span>
                            </h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor
                                ut eveniet commodi...</p>
                            <button class="product-add" title="Add to Cart">
                                <i class="fas fa-shopping-basket"></i>
                                <span>add</span>
                            </button>
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                    value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label">
                                <label class="label-text feat">feature</label>
                            </div>
                            <button class="feature-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="feature-image" href="product-video.html">
                                <img src="images/product/14.jpg" alt="product">
                            </a>
                            <div class="feature-widget">
                                <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name">
                                <a href="product-video.html">fresh organic green chilis</a>
                            </h6>
                            <div class="feature-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.html">(3 Reviews)</a>
                            </div>
                            <h6 class="feature-price">
                                <del>$34</del>
                                <span>$28<small>/piece</small></span>
                            </h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor
                                ut eveniet commodi...</p>
                            <button class="product-add" title="Add to Cart">
                                <i class="fas fa-shopping-basket"></i>
                                <span>add</span>
                            </button>
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                    value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25">
                        <a href="shop-4column.html" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>show more</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--=====================================
                        FEATURE PART END
            =======================================-->


    <!--=====================================
                        COUNTDOWN PART START
            =======================================-->
    {{-- <section class="section countdown-part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto">
                    <div class="countdown-content">
                        <h3>special discount offer for vegetable items</h3>
                        <p>Reprehenderit sed quod autem molestiae aut modi minus veritatis iste dolorum suscipit quis
                            voluptatum fugiat mollitia quia minima</p>
                        <div class="countdown countdown-clock" data-countdown="2021/12/31">
                            <span class="countdown-time"><span>00</span><small>days</small></span>
                            <span class="countdown-time"><span>00</span><small>hours</small></span>
                            <span class="countdown-time"><span>00</span><small>minutes</small></span>
                            <span class="countdown-time"><span>00</span><small>seconds</small></span>
                        </div>
                        <a href="shop-4column.html" class="btn btn-inline">
                            <i class="fas fa-shopping-basket"></i>
                            <span>shop now</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="countdown-img">
                        <img src="images/countdown.png" alt="countdown">
                        <div class="countdown-off">
                            <span>20%</span>
                            <span>off</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--=====================================
                        COUNTDOWN PART END
            =======================================-->


    <!--=====================================
                        NEW ITEM PART START
            =======================================-->
    {{-- <section class="section newitem-part">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-heading">
                        <h2>collected new items</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="new-slider slider-arrow">
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text new">new</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/15.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye"
                                            data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text"
                                            name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text new">new</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/16.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye"
                                            data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text"
                                            name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text new">new</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/17.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye"
                                            data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text"
                                            name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text new">new</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/18.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye"
                                            data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text"
                                            name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text new">new</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/19.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye"
                                            data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text"
                                            name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text new">new</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/20.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye"
                                            data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text"
                                            name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="section-btn-25">
                        <a href="shop-4column.html" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>show more</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--=====================================
                        NEW ITEM PART END
            =======================================-->


    <!--=====================================
                        PROMOTION PART START
            =======================================-->
    {{-- <div class="section promo-part">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 px-xl-3">
                    <div class="promo-img">
                        <a href=""><img src="images/promo/home/01.jpg" alt="promo"></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 px-xl-3">
                    <div class="promo-img">
                        <a href=""><img src="images/promo/home/02.jpg" alt="promo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--=====================================
                        PROMOTION PART END
            =======================================-->


    <!--=====================================
                        NICHE PART START
            =======================================-->
    {{-- <section class="section niche-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Browse by Top Niche</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs">
                        <li>
                            <a href="#top-order" class="tab-link active" data-bs-toggle="tab">
                                <i class="icofont-price"></i>
                                <span>top order</span>
                            </a>
                        </li>
                        <li>
                            <a href="#top-rate" class="tab-link" data-bs-toggle="tab">
                                <i class="icofont-star"></i>
                                <span>top rating</span>
                            </a>
                        </li>
                        <li>
                            <a href="#top-disc" class="tab-link" data-bs-toggle="tab">
                                <i class="icofont-sale-discount"></i>
                                <span>top discount</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade show active" id="top-order">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/01.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/02.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/03.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/04.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/05.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card product-disable">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/06.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card product-disable">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/07.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/08.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/09.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/10.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="top-rate">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text rate">4.8</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/11.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text rate">4.8</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/12.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text rate">4.8</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/13.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text rate">4.8</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/14.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text rate">4.8</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/15.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text rate">4.8</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/16.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card product-disable">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text rate">4.8</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/17.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text rate">4.8</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/18.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text rate">4.8</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/19.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text rate">4.8</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/20.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="top-disc">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-10%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/06.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-10%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/07.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-10%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/08.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-10%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/09.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-10%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/10.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-10%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/11.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-10%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/12.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-10%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/13.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-10%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/14.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-10%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/15.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                        class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text"
                                        name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i
                                            class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25">
                        <a href="shop-4column.html" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>show more</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--=====================================
                        NICHE PART END
            =======================================-->


    <!--=====================================
                        BRAND PART START
            =======================================-->
    {{-- <section class="section brand-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>shop by brands</h2>
                    </div>
                </div>
            </div>
            <div class="brand-slider slider-arrow">
                <div class="brand-wrap">
                    <div class="brand-media">
                        <img src="images/brand/01.jpg" alt="brand">
                        <div class="brand-overlay">
                            <a href="brand-single.html"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>natural greeny</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media">
                        <img src="images/brand/02.jpg" alt="brand">
                        <div class="brand-overlay">
                            <a href="brand-single.html"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>vegan lover</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media">
                        <img src="images/brand/03.jpg" alt="brand">
                        <div class="brand-overlay">
                            <a href="brand-single.html"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>organic foody</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media">
                        <img src="images/brand/04.jpg" alt="brand">
                        <div class="brand-overlay">
                            <a href="brand-single.html"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>ecomart limited</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media">
                        <img src="images/brand/05.jpg" alt="brand">
                        <div class="brand-overlay">
                            <a href="brand-single.html"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>fresh fortune</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media">
                        <img src="images/brand/06.jpg" alt="brand">
                        <div class="brand-overlay">
                            <a href="brand-single.html"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>econature</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-50">
                        <a href="brand-list.html" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>view all brands</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--=====================================
                        BRAND PART END
            =======================================-->


    <!--=====================================
                    TESTIMONIAL PART START
            =======================================-->
    {{-- <section class="section testimonial-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>client's feedback</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider slider-arrow">
                        <div class="testimonial-card">
                            <i class="fas fa-quote-left"></i>
                            <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati magnam
                                doloribus magni provident ipsam</p>
                            <h5>mahmud hasan</h5>
                            <ul>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul>
                            <img src="images/avatar/01.jpg" alt="testimonial">
                        </div>
                        <div class="testimonial-card">
                            <i class="fas fa-quote-left"></i>
                            <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati magnam
                                doloribus magni provident ipsam</p>
                            <h5>mahmud hasan</h5>
                            <ul>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul>
                            <img src="images/avatar/02.jpg" alt="testimonial">
                        </div>
                        <div class="testimonial-card">
                            <i class="fas fa-quote-left"></i>
                            <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati magnam
                                doloribus magni provident ipsam</p>
                            <h5>mahmud hasan</h5>
                            <ul>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul>
                            <img src="images/avatar/03.jpg" alt="testimonial">
                        </div>
                        <div class="testimonial-card">
                            <i class="fas fa-quote-left"></i>
                            <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati magnam
                                doloribus magni provident ipsam</p>
                            <h5>mahmud hasan</h5>
                            <ul>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul>
                            <img src="images/avatar/04.jpg" alt="testimonial">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--=====================================
                    TESTIMONIAL PART END
            =======================================-->


    <!--=====================================
                        BLOG PART START
            =======================================-->
    {{-- <section class="section blog-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Read our articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-slider slider-arrow">
                        <div class="blog-card">
                            <div class="blog-media">
                                <a class="blog-img" href="#">
                                    <img src="images/blog/01.jpg" alt="blog">
                                </a>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        <span>admin</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-calendar-alt"></i>
                                        <span>february 02, 2021</span>
                                    </li>
                                </ul>
                                <h4 class="blog-title">
                                    <a href="blog-details.html">Voluptate blanditiis provident Lorem ipsum dolor sit
                                        amet</a>
                                </h4>
                                <p class="blog-desc">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae
                                    deleniti nam dignissimos sequi ...
                                </p>
                                <a class="blog-btn" href="#">
                                    <span>read more</span>
                                    <i class="icofont-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog-card">
                            <div class="blog-media">
                                <a class="blog-img" href="#">
                                    <img src="images/blog/02.jpg" alt="blog">
                                </a>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        <span>admin</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-calendar-alt"></i>
                                        <span>february 02, 2021</span>
                                    </li>
                                </ul>
                                <h4 class="blog-title">
                                    <a href="blog-details.html">Voluptate blanditiis provident Lorem ipsum dolor sit
                                        amet</a>
                                </h4>
                                <p class="blog-desc">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae
                                    deleniti nam dignissimos sequi ...
                                </p>
                                <a class="blog-btn" href="#">
                                    <span>read more</span>
                                    <i class="icofont-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog-card">
                            <div class="blog-media">
                                <a class="blog-img" href="#">
                                    <img src="images/blog/03.jpg" alt="blog">
                                </a>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        <span>admin</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-calendar-alt"></i>
                                        <span>february 02, 2021</span>
                                    </li>
                                </ul>
                                <h4 class="blog-title">
                                    <a href="blog-details.html">Voluptate blanditiis provident Lorem ipsum dolor sit
                                        amet</a>
                                </h4>
                                <p class="blog-desc">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae
                                    deleniti nam dignissimos sequi ...
                                </p>
                                <a class="blog-btn" href="#">
                                    <span>read more</span>
                                    <i class="icofont-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog-card">
                            <div class="blog-media">
                                <a class="blog-img" href="#">
                                    <img src="images/blog/04.jpg" alt="blog">
                                </a>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        <span>admin</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-calendar-alt"></i>
                                        <span>february 02, 2021</span>
                                    </li>
                                </ul>
                                <h4 class="blog-title">
                                    <a href="blog-details.html">Voluptate blanditiis provident Lorem ipsum dolor sit
                                        amet</a>
                                </h4>
                                <p class="blog-desc">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae
                                    deleniti nam dignissimos sequi ...
                                </p>
                                <a class="blog-btn" href="#">
                                    <span>read more</span>
                                    <i class="icofont-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25">
                        <a href="blog-grid.html" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>view all blog</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--=====================================
                        BLOG PART END
            =======================================-->


    <!--=====================================
                        NEWSLETTER PART START
            =======================================-->
    {{-- <section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 col-xl-7">
                    <div class="news-text">
                        <h2>Get 20% Discount for Subscriber</h2>
                        <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <form class="news-form">
                        <input type="text" placeholder="Enter Your Email Address">
                        <button><span><i class="icofont-ui-email"></i>Subscribe</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
    <!--=====================================
                        NEWSLETTER PART END
            =======================================-->
@endsection
