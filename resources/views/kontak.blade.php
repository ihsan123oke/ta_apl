@extends('layouts.main')

@section('content')    
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate pb-0 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Beranda <i class="fa fa-chevron-right"></i></a></span> <span>Kontak <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-3 bread">Kontak</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section">
  <div class="container">
    <div class="row block-9 justify-content-center mb-5">
      <div class="col-md-8 mb-md-5">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Form Pemesanan</span>
            <h2 class="mb-3">Daftar Sekarang</h2>
          </div>
        </div>
        @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        @endif
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }} <br/>
            @endforeach
        </div>
        @endif
        <form action="/pemesanan" method="post" enctype="multipart/form-data" class="bg-light p-5 contact-form">
          @csrf
          <div class="form-group">
              <label for="nama">Nama Lengkap</label><br>
              <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Lengkap" value="{{ old('nama')}}">
          </div>
          <div class="form-group">
              <label for="email">Email</label><br>
              <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email" value="{{ old('email')}}">
          </div>
          <div class="form-group">
              <label for="no_hp">No. Handphone</label><br>
              <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" placeholder="Masukkan No. Hanphome" value="{{ old('no_hp')}}">
          </div>
          <div class="form-group">
              <label for="alamat">Alamat</label><br>
              <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan Alamat" value="{{ old('alamat')}}">
          </div>
          <div class="form-group">
              <label for="ttl">Tempat Tanggal Lahir</label><br>
              <input type="text" name="ttl" class="form-control @error('ttl') is-invalid @enderror" placeholder="Tempat, Hari/Tanggal/Tahun" value="{{ old('ttl')}}">
          </div>
          <div class="form-group">
              <label for="no_ktp">No. KTP</label><br>
              <input type="text" name="no_ktp" class="form-control @error('no_ktp') is-invalid @enderror" placeholder="Masukkan No. KTP" value="{{ old('no_ktp')}}">
          </div>
          <div class="form-group">
              <label for="proyek">Pilih Proyek </label><br>
              <select name="proyek" id="proyek" class="form-control"value="{{ old('proyek')}}">
                  @foreach($proyek as $p)
                  <option value="{{$p->nama_proyek}}">{{$p->nama_proyek}}</option>
                  @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="tipe">Pilih Tipe Rumah </label><br>
              <select name="tipe" id="tipe" class="form-control"value="{{ old('tipe')}}">
                  @foreach($tipe as $t)
                  <option value="{{$t->nama_tipe}}">{{$t->nama_tipe}}</option>
                  @endforeach
              </select>
          </div>
          <div class="row justify-content-center">
            <input type="submit" value="Daftar Sekarang" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
    <div class="row d-flex mb-5 contact-info justify-content-center">
      <div class="col-md-8">
        <div class="row mb-5">
          <div class="col-md-4 text-center py-4">
            <div class="icon">
              <span class="fa fa-map"></span>
            </div>
            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
          </div>
          <div class="col-md-4 text-center border-height py-4">
            <div class="icon">
              <span class="fa fa-phone"></span>
            </div>
            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
          </div>
          <div class="col-md-4 text-center py-4">
            <div class="icon">
              <span class="fa fa-paper-plane"></span>
            </div>
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div id="map" class="bg-white"></div>
      </div>
    </div>
  </div>
</section>	
@endsection
