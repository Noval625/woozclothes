@extends('admin.admin_master')
@section('content')
  <div class="container pt-5">
    @foreach ($barangs as $key)
    <div class="card-custom">
        <div class="head-card">
             <img src="{{ asset('upload/barang/'. $key->image ) }}" alt="">
        </div>
        <div class="body-card">
             <h2>{{ $key->nama_barang }}</h2>
             <h5>{{ $key->harga_barang }}</h5>
             <p>{{ $key->stok }}</p>
             <a href="{{ route('admin.barang.show', $key->id) }}" ><svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>

        </div>
     </div>
    @endforeach
    <div class="d-flex fixed-bottom justify-content-end" style="margin: 75px 25px">
        <a href="{{ route('admin.barang.create') }}" class="btn btn-info"><i class="fa fa-plus"></i></a>
    </div>
 </div>

@endsection
