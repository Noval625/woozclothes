@extends('admin.admin_master')
@section('content')

<div class="page-content">
<div class="container-fluid">

    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">View Barang</h1>
            <div class="card">
                <div class="card-body">
                    <h3 class="mt-4 mb-4">Detail Barang</h3>
                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <tr>
                                <td>Detail Gambar</td>
                                <td><img src="{{ asset('upload/barang/'. $barang->image ) }}" height="200" width="250" alt=""></td>
                            </tr>
                            <tr>
                                <td>Nama Barang</td>
                                <td>{{ $barang->nama_barang }}</td>
                            </tr>
                            <tr>
                                <td>Harga Barang</td>
                                <td>{{ $barang->harga_barang }}</td>
                            </tr>
                            <tr>
                                <td>Stok Barang</td>
                                <td>{{ $barang->stok }}</td>
                            </tr>
                            <tr>
                                <td>Deskripsi Barang</td>
                                <td>{{ $barang->deskripsi }}</td>
                            </tr>
                        </table>
                        <a class="btn btn-warning waves-effect waves-light" href="{{ route('admin.barang.index') }}" role="button">Kembali</a>
                        <a class="btn btn-danger waves-effect waves-light" href="{{ route('admin.barang.index') }}" role="button">Tambah Keranjang</a>
                        <a class="btn btn-success waves-effect waves-light" href="{{ route('admin.barang.index') }}" role="button">Bayar Sekarang</a>
                        <form action="{{ route('admin.barang.destroy', $barang->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="bi bi-trash-fill border-0"> Hapus </button>
                        </form>
                    </div>
                </div>
            </div>
    </div>




  </div>
</div>
@endsection
