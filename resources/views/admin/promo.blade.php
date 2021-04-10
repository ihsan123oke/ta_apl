@extends('layouts.app')
@section('title','Promo')
@section('content')
<div class="container">
    <h1 class="mt-5 text-center">Daftar Promo</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="row mt-5">
        <div class="col-md-6">
            <img src="{{ URL::asset('/images/promo.svg') }}" alt="" width=100% height=100%>
        </div>
        <div class="col-md-6">
            <div class="list-group ">
                @foreach($promo as $p)
                <a href="{{ url('/promo/'.$p->id)}}" class="list-group-item list-group-item-action ">{{$p->nama_promo}}</a>
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{ url('/promo/tambah_promo')}}" class="btn btn-primary my-5">Tambah Promo</a>
            </div>
        </div>
    </div>
</div>
@endsection