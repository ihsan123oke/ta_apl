@extends('layouts.app')
@section('title','Marketing')
@section('content')
<div class="container">
    <h1 class="mt-5 text-center">Daftar Marketing</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="row mt-5">
        <div class="col-md-6">
            <img src="{{ URL::asset('/images/marketing.svg') }}" alt="" width=100% height=100%>
        </div>
        <div class="col-md-6">
            <div class="list-group ">
                @foreach($marketing as $m)
                <a href="{{ url('/marketing/'.$m->id)}}" class="list-group-item list-group-item-action ">{{$m->nama_marketing}}</a>
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{ url('/marketing/tambah_marketing')}}" class="btn btn-primary my-5">Tambah Marketing</a>
            </div>
        </div>
    </div>
</div>
@endsection