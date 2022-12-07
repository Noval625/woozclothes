@extends('admin.admin_master')
@section('content')

<div class="page-content">
    <div class="container-fluid">
        <form action="{{ route('admin.barang.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group row mb-3">
            <label for="inputAddress">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" id="inputAddress" >
            </div>
            <div class="form-group row mb-3">
            <label for="inputAddress2">Harga</label>
            <input type="text" class="form-control" name="harga_barang" id="inputAddress2" >
            </div>
            <div class="form-group row mb-3">
            <label for="inputAddress2">Stok</label>
            <input type="text" class="form-control" name="stok" id="inputAddress2" >
            </div>
            <div class="form-group row mb-3">
            <label for="inputAddress2">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" id="inputAddress2" >
            </div>
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Gambar Barang</label>
                <div class="col-sm-10">
                <input name="image" class="form-control" type="file"  id="image">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">create</button>
        </form>
    </div>
</div>


@endsection
