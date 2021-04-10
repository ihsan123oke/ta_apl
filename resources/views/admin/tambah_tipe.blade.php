@extends('layouts.app')
@section('title','Tambah Tipe Rumah')
@section('content')
<body>
    <div class="container">
        <h1 class="my-5 text-center">Tambah Tipe Rumah</h1>
        <div class="row">
            <div class="col-md-6">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                    @endforeach
                </div>
                @endif
                <form action="{{ url('/proyek/tipe_rumah/tambah_tipe/proses') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="gambar_tipe">Gambar Tipe Rumah</label><br>
                        <input type="file" name="file">
                    </div>
                    <div class="form-group">
                        <label for="proyek_id">Nama Proyek</label><br>
                        <select name="proyek_id" id="proyek_id" class="form-control"value="{{ old('proyek_id')}}">
                            @foreach($proyek as $p)
                            <option value="{{$p->proyek_id}}">{{$p->nama_proyek}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_tipe">Nama Tipe Rumah</label><br>
                        <input type="text" name="nama_tipe" class="form-control @error('nama_tipe') is-invalid @enderror" placeholder="Masukkan nama tipe rumah" value="{{ old('nama_tipe')}}">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_tipe">Deskripsi Tipe</label><br>
                        <input type="text" name="deskripsi_tipe" class="form-control @error('deskripsi_tipe') is-invalid @enderror" placeholder="Masukkan deskripsi tipe rumah" value="{{ old('deskripsi_tipe')}}">
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="lantai">Lantai</label><br>
                                <select name="lantai" id="lantai" class="form-control" value="{{ old('lantai')}}"placeholder="Pilih Jumlah Lantai">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="kamar">Kamar</label><br>
                                <select name="kamar" id="kamar" class="form-control" value="{{ old('kamar')}}">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="3">4</option>
                                    <option value="3">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="kamar_mandi">Kamar Mandi</label><br>
                                <select name="kamar_mandi" id="kamar_mandi" class="form-control" value="{{ old('kamar_mandi')}}">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="ruang_keluarga">Ruang Keluarga</label><br>
                                <select name="ruang_keluarga" id="ruang_keluarga" class="form-control" value="{{ old('ruang_keluarga')}}">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="dapur">Dapur</label><br>
                                <select name="dapur" id="dapur" class="form-control" value="{{ old('dapur')}}">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="garasi">Garasi</label><br>
                                <select name="garasi" id="garasi" class="form-control" value="{{ old('garasi')}}">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gudang">Gudang</label><br>
                                <select name="gudang" id="gudang" class="form-control" value="{{ old('gudang')}}">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_tipe">Harga</label><br>
                        <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="Masukkan Harga" value="{{ old('hargaproyek')}}">
                    </div>
                    <input type="submit" value="Tambahkan" class="btn btn-primary">
                    <a href="{{ url('/proyek/tipe_rumah') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
            <div class="col-md-6">
                <img src="{{ URL::asset('/images/tambah_tipe.svg')}}" alt="" width=90% height=90%>
            </div>
        </div>
    </div> 
</body>
@endsection