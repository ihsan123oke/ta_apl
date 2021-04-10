@extends('layouts.app')
@section('title','Detail Pemesanan')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <div class="text-center">
                <h1>Info Pemesanan</h1><br>
            </div>
            <form action="{{ url('/pemesanan/'.$pemesanan->id)}}" method="post" enctype="multipart/form-data">
            @method('delete')
            @csrf
                <div class="form-group">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label><br>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Lengkap" value="{{ $pemesanan->nama}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label><br>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email" value="{{ $pemesanan->email}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No. Handphone</label><br>
                        <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" placeholder="Masukkan No. Hanphome" value="{{ $pemesanan->no_hp}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label><br>
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan Alamat" value="{{ $pemesanan->alamat}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="ttl">Tempat Tanggal Lahir</label><br>
                        <input type="text" name="ttl" class="form-control @error('ttl') is-invalid @enderror" placeholder="Tempat, Hari/Tanggal/Tahun" value="{{ $pemesanan->ttl}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_ktp">No. KTP</label><br>
                        <input type="text" name="no_ktp" class="form-control @error('no_ktp') is-invalid @enderror" placeholder="Masukkan No. KTP" value="{{ $pemesanan->no_ktp}}" disabled>
                    </div> 
                    <div class="form-group">
                        <label for="no_ktp">Proyek</label><br>
                        <input type="text" name="no_ktp" class="form-control @error('no_ktp') is-invalid @enderror" placeholder="Masukkan No. KTP" value="{{ $pemesanan->proyek}}" disabled>
                    </div> 
                    <div class="form-group">
                        <label for="no_ktp">Tipe</label><br>
                        <input type="text" name="no_ktp" class="form-control @error('no_ktp') is-invalid @enderror" placeholder="Masukkan No. KTP" value="{{ $pemesanan->tipe}}" disabled>
                    </div> 
                    <input type="submit" value="Hapus Pemesanan" class="btn btn-danger"> 
                    <a href="{{ url('pemesanan') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <img src="{{ URL::asset('/images/booked.svg')}}" alt="" width=90% height=90%>
        </div>
    </div>
</div>
@endsection