@extends('layouts.app')
@section('title','Edit Proyek')
@section('content')
<body>
<div class="container">
    <h1 class="my-5 text-center">Edit Proyek</h1>
    <div class="row">
        <div class="col-md-6">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }} <br/>
                @endforeach
            </div>
            @endif
            <form action="{{ url('/proyek/'.$proyek->proyek_id)}}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
                <div class="form-group">
                    <label for="gambar_proyek">Gambar Proyek</label><br>
                    <input type="file" name="file" value="{{$proyek->file}}">
                </div>
                <div class="form-group">
                    <label for="nama_proyek">Nama Proyek</label><br>
                    <input type="text" name="nama_proyek" class="form-control @error('nama_proyek') is-invalid @enderror" placeholder="Masukkan Nama Proyek" value="{{ $proyek->nama_proyek}}">
                </div>
                <div class="form-group">
                    <label for="alamat_proyek">Alamat Proyek</label><br>
                    <input type="text" name="alamat_proyek" class="form-control @error('alamat_proyek') is-invalid @enderror" placeholder="Masukkan Alamat Proyek" value="{{ $proyek->alamat_proyek}}">
                </div>
                <div class="form-group">
                    <label for="deskripsi_proyek">Deskripsi Proyek</label><br>
                    <input type="text" name="deskripsi_proyek" class="form-control @error('deskripsi_proyek') is-invalid @enderror" placeholder="Masukkan Deskripsi Proyek" value="{{ $proyek->deskripsi_proyek}}">
                </div>
                
                <input type="submit" value="Edit Proyek" class="btn btn-info"> 
                <a href="{{ url('/proyek/'.$proyek->proyek_id) }}" class="btn btn-secondary">Kembali</a>
                
            </form>
        </div>
        <div class="col-md-6 my-5">
            <img src="{{ URL::asset('/images/edit_proyek.svg')}}" alt="" width="100%",height="100%">
        </div>
    </div>
</div> 
</body>
@endsection