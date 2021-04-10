@extends('layouts.app')
@section('title','Proyek')
@section('content')
<div class="container">
    <h1 class="mt-5 text-center">Daftar Proyek</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="row mt-5">
        <div class="col-md-6">
            <img src="{{ URL::asset('/images/proyek_admin.svg') }}" alt="" width=100% height=100%>
        </div>
        <div class="col-md-6">
            <div class="list-group ">
                @foreach($proyek as $p)
                <a href="{{ url('/proyek/'.$p->proyek_id)}}" class="list-group-item list-group-item-action ">{{$p->nama_proyek}}</a>
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{ url('/proyek/tambah_proyek')}}" class="btn btn-primary my-5">Tambah Proyek</a>
            </div>
        </div>
    </div>
</div>
@endsection