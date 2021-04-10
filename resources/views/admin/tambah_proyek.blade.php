@extends('layouts.app')
@section('title','Tambah Proyek')
@section('content')
<body>
    <div class="container">
        <h1 class="my-5 text-center">Tambah Proyek</h1>
        <div class="row">
            <div class="col-md-6">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                    @endforeach
                </div>
                @endif
                <form action="{{ url('/proyek/tambah_proyek/proses') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="gambar_proyek">Gambar Proyek</label><br>
                        <input type="file" name="file">
                    </div>
                    <div class="form-group">
                        <label for="nama_proyek">Nama Proyek</label><br>
                        <input type="text" name="nama_proyek" class="form-control @error('nama_proyek') is-invalid @enderror" placeholder="Masukkan Nama Proyek" value="{{ old('nama_proyek')}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat_proyek">Alamat Proyek</label><br>
                        <input type="text" name="alamat_proyek" class="form-control @error('alamat_proyek') is-invalid @enderror" placeholder="Masukkan Alamat Proyek" value="{{ old('alamat_proyek')}}">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_proyek">Deskripsi Proyek</label><br>
                        <input type="text" name="deskripsi_proyek" class="form-control @error('deskripsi_proyek') is-invalid @enderror" placeholder="Masukkan Deskripsi Proyek" value="{{ old('deskripsi_proyek')}}">
                    </div>
                    <input type="submit" value="Tambahkan" class="btn btn-primary">
                    <a href="{{ url('/proyek') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
            <div class="col-md-6">
                <img src="{{ URL::asset('/images/tambah_proyek.svg')}}" alt="" width=90% height=90%>
            </div>
        </div>
    </div> 
</body>
@endsection