@extends('layout.master')
@section('title', 'Kategori')
@section('dataKategori', 'active')
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
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nomor</th>
                                            <th class="text-center">Kategori</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($kategori as $isi)
                                            <tr>
                                                <td class="text-center">{{ $nomor++ }}</td>
                                                <td class="text-center">{{ $isi->kategori }}</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default{{ $isi->id }}">Edit</a>
                                                    <div class="modal fade" id="modal-default{{ $isi->id }}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <form method="Post" action="/kategori/edit/{{ $isi->id }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Edit Kategori</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label>Kategori</label>
                                                                            <input type="text" name="kategori" value="{{ $isi->kategori }}" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- Modal Edit -->
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
                                                                        <p>Yakin Kategori <b>{{ $isi->kategori }}</b> Dihapus ?</p>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                                        <form action="/kategori/{{$isi->id}}" method="post">
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
                                                    <!-- Modal Hapus -->
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
                    <div class="col-6">
                        <div class="card">
                            <form action="/admn/kategori/store" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <input type="text" name="kategori" class="form-control" placeholder="Masukkan Kategori">
                                    </div>
                                    <div class="form-group">
                                        <label>Foto</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="foto" class="custom-file-input @error ('foto') is-invalid @enderror" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Pilih Foto</label>
                                                @error('foto')
                                                    <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
