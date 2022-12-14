@extends('layout.master')
@section('title', 'Data Pesan')
@section('dataPesan', 'active')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Pesan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Pesan</li>
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
                                            <th class="text-center">No</th>
                                            <th class="text-center">Username</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">No Faktur</th>
                                            <th class="text-center">Tanggal</th>
                                            {{-- <th class="text-center">Total Harga</th> --}}
                                            <th class="text-center">Pembayaran</th>
                                            <th class="text-center">Pengiriman</th>
                                            <th class="text-center">Bukti</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ( $pesan as $isi)
                                            <tr>
                                                <td class="text-center">{{ $nomor++ }}</td>
                                                <td class="text-center">{{ $isi->pesan->username }}</td>
                                                <td class="text-center">
                                                    @if ($isi->status == 1)
                                                        <span class="badge1 bg-success"><i class="fa-solid fa-circle-check"></i> Sudah Di Pesan</span>
                                                    @else
                                                        <span class="badge1 bg-danger"><i class="fa-solid fa-circle-xmark"></i> Belum Di Pesan</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">{{ $isi->no_faktur }}</td>
                                                <td class="text-center">{{ $isi->tanggal }}</td>
                                                {{-- <td class="text-center">Rp. {{ number_format( $isi->total_harga,0,",",".") }}</td> --}}
                                                <td class="text-center">
                                                    @if ($isi->dibayar == 0)
                                                        <div class="form-rapi">
                                                            <form action="/admn/pesan/diterima/{{ $isi->id }}" method="post">
                                                                @csrf
                                                                @method("PUT")
                                                                <button type="submit" class="btn btn-outline-success badge1 btn-sm"><i class="fa-solid fa-circle-check"></i> Diterima</button>
                                                                {{-- <button type="submit" class="btn btn-group-sm btn-primary btn-sm">Masuk</button> --}}
                                                            </form>
                                                            <form action="/admn/pesan/ditolak/{{ $isi->id }}" method="post">
                                                                @csrf
                                                                @method("PUT")
                                                                <button type="submit" class="btn btn-outline-danger badge1 btn-sm"><i class="fa-solid fa-circle-xmark"></i> Tidak</button>
                                                                {{-- <button type="submit" class="btn btn-group-sm btn-success btn-sm">Tidak</button> --}}
                                                            </form>
                                                        </div>
                                                    @elseif ($isi->dibayar == 1)
                                                        <span class="badge1 bg-success"><i class="fa-solid fa-circle-check"></i> Saldo Diterima</span>
                                                    @elseif ($isi->dibayar == 2)
                                                        <div class="form-rapi">
                                                            <form action="/admn/pesan/diterima/{{ $isi->id }}" method="post">
                                                                @csrf
                                                                @method("PUT")
                                                                {{-- <button type="button" class="btn btn-outline-danger btn-block btn-sm"><i class="fa fa-bell"></i> .btn-block</button> --}}

                                                                <button type="submit" class="btn btn-outline-success badge1 btn-sm"><i class="fa-solid fa-circle-check"></i> Diterima</button>
                                                            </form>
                                                            <span class="badge1 bg-danger"><i class="fa-solid fa-circle-xmark"></i> Belum Diterima</span>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    @if ($isi->dikirim == 1)
                                                        <span class="badge1 bg-success"><i class="fa-solid fa-truck-fast"></i> Sedang Dikirim</span>
                                                    @else
                                                        <span class="badge1 bg-danger"><i class="fa-solid fa-truck"></i> Belum Dikirim</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default{{ $isi->id }}">Bukti</a>
                                                    <div class="modal fade" id="modal-default{{ $isi->id }}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Bukti Pembayaran</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <img class="img-modal-bukti" src="{{ asset('bukti/'.$isi->bukti) }}" alt="">
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
                                                {{-- <td class="text-center">
                                                    <a href="/toko/edit/{{$isi->id}}" class="btn btn-primary btn-sm">Edit</a>
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
                                                                        <p>Yakin Toko <b>{{ $isi->nama_toko }}</b> Dihapus ?</p>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                                        <form action="/toko/{{$isi->id}}" method="post">
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
                                                </td> --}}
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
