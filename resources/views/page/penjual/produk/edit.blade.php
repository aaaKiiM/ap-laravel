@extends('layout.penjual')
@section('title','Tambah Produk')
@section('addprod','active')
@section('content')
<section class="content-main">
    <form class="row" action="/produk/update/{{ $produk->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="col-12">
            <div class="content-header">
                <h2 class="content-title">Edit Produk</h2>
                <p>{{auth()->user()->toko->nama_toko ?? 'n/a'}}</p>
                <div>
                    <button type="submit" class="btn btn-md rounded font-sm hover-up">Simpan</button>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-4">
                        <label for="product_title" class="form-label">Nama Produk</label>
                        <input type="text" value="{{ $produk->nama_kue }}" name="nmProduk" placeholder="Masukkan Nama Produk" class="form-control">
                    </div>
                    <div class="row gx-3">
                        <div class="col-md-6 mb-3">
                            <label for="product_sku" class="form-label">Harga</label>
                            <input type="text" id="rupiah"  value="{{ $produk->harga }}" name="harga" placeholder="Rp.-" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="product_color" class="form-label">Stock</label>
                            <input type="number" value="{{ $produk->stock }}" name="stock" placeholder="Masukkan Stock" class="form-control">
                        </div>
                    </div>
                    {{-- <input type="hidden" value="{{auth()->user()->toko->id}}" name="idtoko"> --}}
                    {{-- <div class="mb-4">
                        <label for="product_brand" class="form-label">Brand</label>
                        <input type="text" placeholder="Masukkan " class="form-control" id="product_brand" />
                    </div> --}}
                </div>
            </div>
            <!-- card end// -->
            <div class="card mb-4">
                <div class="card-body">
                    <div>
                        <label class="form-label">Keterangan</label>
                        {{-- <input placeholder="Keterangan" type="text" name="ket" class="form-control" rows="4"> --}}
                        <textarea placeholder="Keterangan" name="ket" class="form-control" rows="4">{{ $produk->keterangan }}</textarea>
                    </div>
                </div>
            </div>
            <!-- card end// -->
            {{-- <div class="card mb-4">
                <div class="card-body">
                    <div>
                        <label class="form-label">Foto</label>
                        <input class="form-control @error ('foto') is-invalid @enderror" name="foto" type="file" />
                        @error('foto')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
            </div> --}}
            <!-- card end// -->
        </div>
        <div class="col-lg-3">
            <div class="card mb-4">
                <div class="card-body">
                    {{-- <div class="mb-4">
                        <label class="form-label">Harga</label>
                        <input type="text" placeholder="Rp.-" class="form-control" />
                    </div> --}}
                    {{-- <div class="mb-4">
                        <label class="form-label">Status</label>
                        <select class="form-select">
                            <option>Published</option>
                            <option>Draft</option>
                        </select>
                    </div> --}}
                    {{-- <hr /> --}}
                    <h5 class="mb-3">Categories</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" {{ $produk->kategori=='Bolu' ? 'checked' : '' }} name="kat" value="Bolu" id="product-cat" />
                        <label class="form-check-label" for="product-cat"> Bolu </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" {{ $produk->kategori=='Brownies' ? 'checked' : '' }} name="kat" value="Brownies" id="product-cat-1" />
                        <label class="form-check-label" for="product-cat-1"> Brownies </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="kat" value="" id="product-cat-2" />
                        <label class="form-check-label" for="product-cat-2"> Sneakers </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="kat" value="" id="product-cat-3" />
                        <label class="form-check-label" for="product-cat-3"> Joggers </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="kat" value="" id="product-cat-4" />
                        <label class="form-check-label" for="product-cat-4"> Vests </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="kat" value="" id="product-cat-5" />
                        <label class="form-check-label" for="product-cat-5"> Knitwear </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="kat" value="" id="product-cat-8" />
                        <label class="form-check-label" for="product-cat-8"> Shorts </label>
                    </div>
                </div>
            </div>
            <!-- card end// -->
        </div>
    </form>
</section>
@endsection
