@extends('layouts.main')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url( {{url('images/bg_1.jpg')}} );" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate pb-0 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Beranda <i
                                class="fa fa-chevron-right"></i></a></span><span class="mr-2">Proyek <i
                            class="fa fa-chevron-right"></i></></span><span></span>Proyek Info</p>
                <h1 class="mb-3 bread">{{$proyek->nama_proyek}} </h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section goto-here">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Proyek</span>
                <h2 class="mb-2">Proyek Info</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="{{ url('/images/pyk_info.svg') }}" alt="" widht="65%" height="65%">
            </div>
            <div class="col-md-6 ">
                <p class="mt-5">{{$proyek->deskripsi_proyek}}</p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section goto-here">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Tipe Rumah</span>
                <h2 class="mb-2">Properti Unggulan</h2>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach($tipe as $t)
        @if($proyek->proyek_id === $t->proyek_id)
        <div class="col-md-4">
            <div class="property-wrap ftco-animate">
                <a href="{{ url('/prt/'.$t->tipe_id)}}" class="img" style="background-image: url( {{ url('/data_file/'.$t->file) }} );">
                </a>
                <div class="text">
                    <ul class="property_list">
                        <li><span class="flaticon-floor-plan"></span>{{$t->deskripsi_tipe}}</li>
                    </ul>
                    <h3><a href="#">{{$t->nama_tipe}}</a></h3>
                    <span class="location">{{$proyek->nama_proyek}}</span>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</section>
@endsection