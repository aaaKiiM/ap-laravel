@extends('layout.master')
@section('title', 'Data Produk')
@section('dataProduk', 'active')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Produk</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Produk</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nomor</th>
                                            <th class="text-center">Nama Toko</th>
                                            <th class="text-center">Nama Kue</th>
                                            <th class="text-center">Kategori</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ( $produk as $isi )
                                        <tr>
                                            <td class="text-center">{{ $nomor++ }}</td>
                                            <td class="text-center">{{ $isi->nama_kue }}</td>
                                            <td class="text-center">{{ $isi->toko->nama_toko }}</td>
                                            <td class="text-center">{{ $isi->kategoris->kategori }}</td>
                                            <td class="text-center">
                                                @if ($isi->is_active == 1 && $isi->stock > 0)
                                                <td class="text-center">
                                                    <a href="/penjual/produk/edit/{{$isi->id}}" class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default1{{ $isi->id }}">Nonaktifkan</a>
                                                    <div class="modal fade" id="modal-default1{{ $isi->id }}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Nonaktifkan Produk {{ $isi->nama_kue }}</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Yakin Produk <b>{{ $isi->nama_kue }}</b> Dinonaktifkan ?</p>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                                        <form action="/penjual/produk/nonaktif/{{$isi->id}}" method="post">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <button type="submit" class="btn btn-primary">Setuju</button>
                                                                        </form>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- Modal Edit -->
                                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default{{ $isi->id }}">Detail</a>
                                                    <div class="modal fade" id="modal-default{{ $isi->id }}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Detail Produk</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Nama Kue     : {{ $isi->nama_kue }}</p>
                                                                        <p>Kategori     : {{ $isi->kategoris->kategori }}</p>
                                                                        <p>Harga        : Rp. {{ $isi->harga}}</p>
                                                                        <p>Keterangan   : {{ $isi->keterangan }}</p>
                                                                        <p>Stock        : {{ $isi->stock }}</p>
                                                                        <img class="img-modal" src="{{ asset('produk/'.$isi->foto) }}" alt="">
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                </td>
                                            @elseif ($isi->is_active == 1 && $isi->stock < 1)
                                                <td class="text-center"><span class="badge1 bg-danger">Stock Habis</span></td>
                                            @elseif ($isi->is_active == 0 && $isi->stock > 0)
                                                <td class="text-center">
                                                    <div class="form-rapi">
                                                        <span class="badge1 bg-danger"><i class="fa-solid fa-ban"></i> Produk Dinonaktifkan</span>
                                                        <form action="/penjual/produk/aktif/{{ $isi->id }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit" class="btn btn-primary btn-sm">Aktifkan</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            @endif
                                            </td>
                                        </tr>
                                        @empty

                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
