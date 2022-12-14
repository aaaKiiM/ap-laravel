@extends('layout.master')
@section('title', 'Data Toko')
@section('dataToko', 'active')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
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
                                            <th class="text-center">Nama Toko</th>
                                            <th class="text-center">Alamat Toko</th>
                                            <th class="text-center">No Hp Toko</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ( $toko as $isi)
                                            <tr>
                                                <td class="text-center">{{ $nomor++ }}</td>
                                                <td class="text-center">{{ $isi->owner->nama }}</td>
                                                <td class="text-center">{{ $isi->nama_toko }}</td>
                                                <td class="text-center">{{ $isi->alamat_toko }}</td>
                                                <td class="text-center">{{ $isi->no_hp_toko }}</td>
                                                @if ($isi->confirmed == 0)
                                                    <td class="text-center">
                                                        <form action="/admn/toko/confirmed/{{ $isi->id }}" method="post">
                                                            @csrf
                                                            @method("PUT")
                                                            <button type="submit" class="btn btn-primary btn-sm">Kirim Email</button>
                                                        </form>
                                                    </td>
                                                @else
                                                    <td class="text-center">Terdaftar</td>
                                                @endif
                                                <td class="text-center">
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
