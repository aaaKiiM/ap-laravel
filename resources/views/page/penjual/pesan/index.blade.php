@extends('layout.master')
@section('title', 'Data Pesan')
@section('dataPesan', 'active')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-9">
                        <h1>Data Pesan Di Toko <b>{{ auth()->user()->toko->nama_toko }}</b></h1>
                    </div>
                    <div class="col-sm-3">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
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
                                <a href="/produk/form" class="btn btn-primary">Tambah Produk</a>

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
                                            <th class="text-center">Username</th>
                                            <th class="text-center">No Faktur</th>
                                            <th class="text-center">Tanggal</th>
                                            <th class="text-center">Status Pemesanan</th>
                                            <th class="text-center">Status Pembayaran</th>
                                            <th class="text-center">Status Pengiriman</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ( $pesan as $isi )
                                        <tr>
                                            <td class="text-center">{{ $nomor++ }}</td>
                                            <td class="text-center">{{ $isi->pesan->username }}</td>
                                            <td class="text-center">{{ $isi->no_faktur }}</td>
                                            <td class="text-center">{{ $isi->tanggal }}</td>
                                            <td class="text-center">
                                                @if ($isi->status == 1)
                                                    <span class="badge1 bg-success">Sudah Dipesan</span>
                                                @else
                                                    <span class="badge1 bg-danger">Belum Dipesan</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if ($isi->dibayar == 0)
                                                    <span class="badge1 bg-danger"><i class="fa-solid fa-circle-xmark"></i> Belum Dibayar</span>
                                                @elseif ($isi->dibayar == 1)
                                                    <span class="badge1 bg-success"><i class="fa-solid fa-circle-check"></i> Sudah Dibayar</span>
                                                @elseif ($isi->dibayar == 2)
                                                    <span class="badge1 bg-danger"><i class="fa-solid fa-circle-xmark"></i> Belum Dibayar</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if ($isi->dikirim == 0)
                                                    <form action="/pesan/dikirim/{{ $isi->id }}" method="post">
                                                        @csrf
                                                        @method("PUT")
                                                        <button type="submit" class="btn btn-outline-success badge1 btn-sm"><i class="fa-solid fa-square-arrow-up-right"></i> Kirim</button>
                                                        {{-- <button type="submit" class="btn btn-group-sm btn-primary btn-sm">Masuk</button> --}}
                                                    </form>
                                                @elseif ($isi->dikirim == 1)
                                                    <span class="badge1 bg-success"><i class="fa-solid fa-circle-check"></i> Dikirim</span>
                                                @endif
                                            </td>
                                            {{-- <td class="text-center">
                                                <a href="/produk/edit/{{$isi->id}}" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default1{{ $isi->id }}">Hapus</a>
                                                <div class="modal fade" id="modal-default1{{ $isi->id }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Hapus Kategori</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Yakin Produk <b>{{ $isi->nama_kue }}</b> Dihapus ?</p>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                                    <form action="/produk/{{$isi->id}}" method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-primary">Hapus</button>
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
                                            </td> --}}
                                        </tr>
                                        @empty
                                            <div class="col"></div>
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
