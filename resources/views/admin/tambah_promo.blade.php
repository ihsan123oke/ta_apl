@extends('layouts.app')
@section('title','Tambah Promo')
@section('content')
<body>
    <div class="container">
        <h1 class="my-5 text-center">Tambah Promo</h1>
        <div class="row">
            <div class="col-md-6">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                    @endforeach
                </div>
                @endif
                <form action="{{ url('/promo/tambah_promo/proses') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="gambar_marketing">Gambar Promo</label><br>
                        <input type="file" name="file">
                    </div>
                    <div class="form-group">
                        <label for="nama_promo">Nama Promo</label><br>
                        <input type="text" name="nama_promo" class="form-control @error('nama_promo') is-invalid @enderror" placeholder="Masukkan Nama Promo" value="{{ old('nama_promo')}}">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_promo">Deskripsi Promo</label><br>
                        <textarea type="text" name="deskripsi_promo" class="form-control @error('deskripsi_promo') is-invalid @enderror" placeholder="Masukkan Deskripsi Promo" value="{{ old('deskripsi_promo')}}"></textarea>
                    </div>
                    <input type="submit" value="Tambahkan" class="btn btn-primary">
                    <a href="{{ url('/promo') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
            <div class="col-md-6">
                <img src="{{ URL::asset('/images/tambah_promo.svg')}}" alt="" width=90% height=90%>
            </div>
        </div>
    </div> 
</body>
@endsection