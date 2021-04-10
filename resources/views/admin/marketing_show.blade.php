@extends('layouts.app')
@section('title','Detail Marketing')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-4 my-5">
            <div class="card text-center my-3" style="width: 18rem;">
                <img src="{{ url('/data_file/'.$marketing->file)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$marketing->nama_marketing}}</h5>
                    <p class="card-text">{{$marketing->jabatan}}</p>
                    <form action="/marketing/{{$marketing->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus Marketing</button>
                    </form> 
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="text-center">
                <h1>Edit Marketing</h1><br>
            </div>
            <form action="{{ url('/marketing/'.$marketing->id)}}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
                <div class="form-group">
                    <label for="gambar_proyek">Gambar Proyek</label><br>
                    <input type="file" name="file" value="{{$marketing->file}}">
                </div>
                <div class="form-group">
                    <label for="nama_marketing">Nama Marketing</label><br>
                    <input type="text" name="nama_marketing" class="form-control @error('nama_marketing') is-invalid @enderror" placeholder="Masukkan Nama Marketing" value="{{ $marketing->nama_marketing}}">
                </div>
                <div class="form-group">
                    <label for="email_marketing">Email Marketing</label><br>
                    <input type="text" name="email_marketing" class="form-control @error('email_marketing') is-invalid @enderror" placeholder="Masukkan Email Marketing" value="{{ $marketing->email_marketing}}">
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label><br>
                    <input type="text" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" placeholder="Masukkan Jabatan" value="{{ $marketing->jabatan}}">
                </div>
                <div class="form-group">
                    <label for="notlp_marketing">No. Telepon/Ponsel</label><br>
                    <input type="text" name="notlp_marketing" class="form-control @error('notlp_marketing') is-invalid @enderror" placeholder="Masukkan No. Telp/Ponsel" value="{{ $marketing->notlp_marketing}}">
                </div>
                
                <input type="submit" value="Edit Marketing" class="btn btn-info"> 
                <a href="{{ url('marketing') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection