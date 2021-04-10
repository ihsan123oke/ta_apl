@extends('layouts.app')
@section('title','Beranda')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<style>
    h1{
        font-family: 'Poppins'; font-size:20px;
    }
</style>
<div class="container">
    <h1 class="my-5 text-center">Selamat Datang Admin APL!</h1>
    <div class="row ">
        <div class="col-md-6 my-5">
            <img src="{{ URL::asset('/images/beranda_admin.svg') }}" alt="" width=100% height=100%>
        </div>
        <div class="col-md-6 my-5">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <a href="{{ url('/promo')}}" style="text-decoration:none;">Kelola Promo</a>
                    </h2>
                    </div>
                </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <a href="{{ url('/proyek')}}" style="text-decoration:none;">Kelola Proyek</a>
                    </h2>
                    </div>
                </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <a href="{{ url('/marketing')}}" style="text-decoration:none;">Kelola Marketing</a>
                    </h2>
                    </div>
                </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <a href="{{ url('/proyek/tipe_rumah')}}" style="text-decoration:none;">Kelola Tipe Rumah</a>
                    </h2>
                    </div>
                </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <a href="{{ url('/pemesanan')}}" style="text-decoration:none;">Kelola Pemesanan</a>
                    </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
