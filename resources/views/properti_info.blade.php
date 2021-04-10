@extends('layouts.main')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url( {{url('images/bg_1.jpg')}} );" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate pb-0 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Beranda <i
                                class="fa fa-chevron-right"></i></a></span><span class="mr-2">Properti <i
                            class="fa fa-chevron-right"></i></></span><span></span>Properti Info</p>
                <h1 class="mb-3 bread">{{$tipe->nama_tipe}} </h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section goto-here">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Properti</span>
                <h2 class="mb-2">Properti Info</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
				<div class="property-wrap ftco-animate">
					<a class="img" style="background-image: url( {{ url('/data_file/'.$tipe->file) }} );">
					</a>
				</div>
                    <a href="{{ url('/simulasi') }}" class="btn py-3 px-4 mt-2" style="background-color: #FD4500;color:white;">Hitung Simulasi KPR</a>
			</div>
            <div class="col-md-8 ftco-animate">


            <!-- <form> -->
            
            <div class="row">
                    <div class="col-md-12" > 
                        <p style="font-size:30px">
                            <b style="text-transform:uppercase">{{$tipe->nama_tipe}}</b>
                        </p>
                        <p style="font-size:30px">
                            <b style="text-transform:uppercase">Rp. {{number_format($tipe->harga,2,',','.')}}</b>
                        </p> 
                    </div>
                    <div class="col-md-12" > 
                        <p style="font-size:12px">
                            {{$tipe->deskripsi_tipe}}
                        </p> 
                    </div>
                        <div class="col-md-3">
                            <p><i class="fa fa-bed" aria-hidden="true" style="color:#FD4500"></i> <span style="">Kamar</span>  <br> {{$tipe->kamar}}</p>
                        </div>
                        <div class="col-md-3">
                            <p><i class="fa fa-bath" aria-hidden="true" style="color:#FD4500"></i> <span style="">Kamar mandi</span> <br> {{$tipe->kamar_mandi}}</p>
                        </div>
                        <div class="col-md-3">
                            <p><i class="fa fa-users" aria-hidden="true" style="color:#FD4500"></i> <span style="">Ruang keluarga</span> <br> {{$tipe->ruang_keluarga}}</p>
                        </div>
                        <div class="col-md-3">
                            <p><i class="fa fa-users" aria-hidden="true" style="color:#FD4500"></i> <span style="">Dapur</span> <br> {{$tipe->dapur}}</p>
                        </div>
                        <div class="col-md-3">
                            <p><i class="fa fa-car" aria-hidden="true" style="color:#FD4500"></i> <span style="">Garasi</span> <br> {{$tipe->garasi}}</p>
                        </div>
                        <div class="col-md-3">
                            <p><i class="fa fa-shower" aria-hidden="true" style="color:#FD4500"></i> <span style="">Laundry room</span> <br> {{$tipe->gudang}}</p>
                        </div>
            </div>                          
                <div class="row justify-content-center">
                    <a href="{{ url('/ktk') }}" class="btn py-3 px-4" style="background-color: #FD4500;color:white;">Hubungi Sekarang</a>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection