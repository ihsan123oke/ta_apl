@extends('layouts.main')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url( {{url('images/bg_1.jpg')}} );"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate pb-0 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Beranda <i
									class="fa fa-chevron-right"></i></a></span><span class="mr-2">Marketing <i
								class="fa fa-chevron-right"></i></></span><span>Marketing Info </span></p>
					<h1 class="mb-3 bread">{{$marketing->nama_marketing}}</h1>
				</div>
			</div>
		</div>
	</section>
    <section class="ftco-section ftco-agent">
		<div class="container">
            <div class="container">
			    <div class="row justify-content-center">
                    <div class="col-md-3 ftco-animate">
                        <div class="agent">
                            <div class="img">
                                <img src="{{ url('/data_file/'.$marketing->file) }}" class="img-fluid" alt="Colorlib Template">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ftco-animate">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama</label>
                                <input type="text" class="form-control" value="{{$marketing->nama_marketing}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jabatan</label>
                                <input type="text" class="form-control" value="{{$marketing->jabatan}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" class="form-control" value="{{$marketing->email_marketing}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">No. Telepon</label>
                                <input type="text" class="form-control" value="{{$marketing->notlp_marketing}}" disabled>
                            </div>
                        </form>
                        <div class="row justify-content-center">
                            <a href="{{ url('/ktk') }}" class="btn py-3 px-4" style="background-color: #FD4500;color:white;">Hubungi Sekarang</a>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</section>
@endsection