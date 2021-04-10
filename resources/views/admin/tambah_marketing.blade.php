@extends('layouts.app')
@section('title','Tambah Marketing')
@section('content')
<body>
    <div class="container">
        <h1 class="my-5 text-center">Tambah Marketing</h1>
        <div class="row">
            <div class="col-md-6">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                    @endforeach
                </div>
                @endif
                <form action="{{ url('/marketing/tambah_marketing/proses') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="gambar_marketing">Gambar Marketing</label><br>
                        <input type="file" name="file">
                    </div>
                    <div class="form-group">
                        <label for="nama_marketing">Nama Marketing</label><br>
                        <input type="text" name="nama_marketing" class="form-control @error('nama_marketing') is-invalid @enderror" placeholder="Masukkan Nama Marketing" value="{{ old('nama_marketing')}}">
                    </div>
                    <div class="form-group">
                        <label for="email_marketing">Email Marketing</label><br>
                        <input type="text" name="email_marketing" class="form-control @error('email_marketing') is-invalid @enderror" placeholder="Masukkan Email Marketing" value="{{ old('email_marketing')}}">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label><br>
                        <input type="text" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" placeholder="Masukkan Jabatan" value="{{ old('jabatan')}}">
                    </div>
                    <div class="form-group">
                        <label for="notlp_marketing">No. Telepon/Ponsel</label><br>
                        <input type="text" name="notlp_marketing" class="form-control @error('notlp_marketing') is-invalid @enderror" placeholder="Masukkan No. Telepon atau Ponsel" value="{{ old('notlp_marketing')}}">
                    </div>
                    <input type="submit" value="Tambahkan" class="btn btn-primary">
                    <a href="{{ url('/marketing') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
            <div class="col-md-6">
                <img src="{{ URL::asset('/images/tambah_marketing.svg')}}" alt="" width=90% height=90%>
            </div>
        </div>
    </div> 
</body>
@endsection