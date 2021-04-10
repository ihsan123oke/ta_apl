@extends('layouts.app')
@section('title','Detail Promo')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-4 my-5">
            <div class="card text-center my-3" style="width: 18rem;">
                <img src="{{ url('/data_file/'.$promo->file)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$promo->nama_promo}}</h5>
                    <p class="card-text">{{$promo->deskripsi_promo}}</p>
                    <form action="/promo/{{$promo->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus Promo</button>
                    </form> 
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="text-center">
                <h1>Edit Promo</h1><br>
            </div>
            <form action="{{ url('/promo/'.$promo->id)}}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
                <div class="form-group">
                    <label for="gambar_proyek">Gambar Promo</label><br>
                    <input type="file" name="file" value="{{$promo->file}}">
                </div>
                <div class="form-group">
                    <label for="nama_promo">Nama Promo</label><br>
                    <input type="text" name="nama_promo" class="form-control @error('nama_promo') is-invalid @enderror" placeholder="Masukkan Nama Promo" value="{{ $promo->nama_promo}}">
                </div>
                <div class="form-group">
                    <label for="deskripsi_promo">Deskripsi Promo</label><br>
                    <textarea type="text" name="deskripsi_promo" class="form-control @error('deskripsi_promo') is-invalid @enderror" placeholder="Masukkan Deskripsi Promo" value="{{ $promo->deskripsi_promo}}"></textarea>
                </div>
                
                <input type="submit" value="Edit Promo" class="btn btn-info"> 
                <a href="{{ url('promo') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection