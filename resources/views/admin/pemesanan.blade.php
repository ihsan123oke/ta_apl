@extends('layouts.app')
@section('title','Pemesanan')
@section('content')
<div class="container">
    <h1 class="mt-5 text-center">Daftar Pemesanan</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form action="/pemesanan/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Pemesan.." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
    </form>
    <!-- <input class="form-control" id="myInput" type="text" placeholder="Search.."> -->
    <div style="overflow-x:auto">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">No. Hp</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tempat, Tanggal Lahir</th>
                <th scope="col">No. KTP</th>
                <th scope="col">Proyek</th>
                <th scope="col">Tipe</th>
                <th scope="col">Tanggal Pemesanan</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                <th scope="col">Hapus</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach($pemesanan as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->no_hp}}</td>
                    <td>{{$p->alamat}}</td>
                    <td>{{$p->ttl}}</td>
                    <td>{{$p->no_ktp}}</td>
                    <td>{{$p->proyek}}</td>
                    <td>{{$p->tipe}}</td>
                    <td>{{$p->created_at}}</td>
                    @if ($p->status == 1)
                    <td>sudah dikonfrimasi</td>
                    @else
                    <td>Belum Dikonfrimasi</td>
                    @endif
                    <td>
                    <form action="{{url('/ubahstatus/'.$p->id)}}" method="post">
                        @csrf
                        @method('put')
                        @if ($p->status == 1)
                        <input type="submit" value="jangan konfirmasi" class="btn btn-danger"></input>
                    @else
                        <input type="submit" class="btn btn-success" value="konfirmasi"></input>
                    @endif
                    </td>
                    </form>
                    <td>
                    <form action="{{ url('/pemesanan/'.$p->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <input type="submit" value="Hapus" class="btn btn-danger">
                        </form>
                        </td>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
$(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    });
</script>
<script type="text/javascript">
    $('.btn-filter').click(function(e){
        e.preventDefault();
        alert('tes button');
    })
</script>

@endsection