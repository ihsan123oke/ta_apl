@extends('layouts.app')
@section('title','Detail Proyek')
@section('content')
<div class="container my-5">
    <div class="text-center">
        <h1>Proyek {{ $proyek->nama_proyek}}</h1><br>
        <a href="{{url('/proyek/tipe_rumah/tambah_tipe')}}" class="btn btn-primary">Tambah Tipe Rumah</a>
    </div>
    <div class="row my-5">
        <div class="col-md-4">
            <h3>Detail Proyek</h3>
            <div class="card border rounded-lg" style="width: 18rem;">
                <img src="{{ url ('/data_file/'.$proyek->file) }}" class="card-img-top img-fluid img-thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $proyek->nama_proyek}}</h5>
                    <p class="card-text">{{ $proyek->deskripsi_proyek}}</p>
                    <p class="card-text"><small class="text-muted">{{ $proyek->alamat_proyek}}</small></p>
                    <a href="/proyek/{{$proyek->proyek_id}}/edit" class="btn btn-info">Edit Proyek</a>
                    <form action="/proyek/{{$proyek->proyek_id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus Proyek</button>
                    </form>                   
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <h3>Tipe Rumah</h3>
            <div class="row">
                <div class="card-group">
                    @foreach($tipe as $t)
                    @if($t->proyek_id == $proyek->proyek_id)
                    <div class="col-4">
                        <div class="card">
                            <img src="{{ url('/data_file/'.$t->file)}}" class="card-img-top img-fluid img-thumbnail" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">{{$t->nama_tipe}}</h5>
                            <h5 class="card-title">{{$t->harga}}</h5>
                            <p class="card-text">{{$t->deskripsi_tipe}}</p>
                            </div>
                            <div class="card-footer">
                            <a href="/proyek/tipe_rumah/{{$t->tipe_id}}/edit"class="btn btn-outline-info ">Edit</a>
                            <form action="/proyek/tipe_rumah/{{$t->tipe_id}}" method="post"class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-outline-danger">Hapus</button>
                            </form>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection