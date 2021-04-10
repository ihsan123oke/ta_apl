@extends('layouts.app')
@section('title','Tipe Rumah')
@section('content')
<div class="container">
    <h1 class="mt-5 text-center">Tipe Rumah</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="row mt-5">
        <div class="col-md-6">
            <img src="{{ URL::asset('/images/tipe_rumah.svg') }}" alt="" width=100% height=100%>
        </div>
        <div class="col-md-6">
            <div class="list-group ">
                @foreach($tipe as $t)
                <a href="{{ url('/proyek/tipe_rumah/'.$t->tipe_id )}}" class="list-group-item list-group-item-action ">Tipe : {{$t->nama_tipe}} - Proyek : @foreach($proyek as $p)
                @if($p->proyek_id === $t->proyek_id){{$p->nama_proyek}}@endif @endforeach
                </a>
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{ url('/proyek/tipe_rumah/tambah_tipe')}}" class="btn btn-primary my-5">Tambah Tipe Rumah</a>
            </div>
        </div>
    </div>
</div>
@endsection