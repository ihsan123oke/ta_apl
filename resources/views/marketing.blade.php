@extends('layouts.main')

@section('content')
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate pb-0 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Beranda <i
									class="fa fa-chevron-right"></i></a></span> <span>Marketing <i
								class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-3 bread">Marketing</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-agent">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Marketing</span>
					<h2 class="mb-4">Hubungi Marketing Kami</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				@foreach($marketing as $m)
				<div class="col-md-3 ftco-animate">
					<div class="agent">
						<div class="img">
							<img src="{{ url('/data_file/'.$m->file) }}" class="img-fluid" alt="Colorlib Template">
							<div class="desc">
								<h3><a href="{{ url('/mkt/'.$m->id) }}">{{$m->nama_marketing}}</a></h3>
								<p class="h-info"><span class="location">{{$m->email_marketing}}</span> <span
										class="details">{{$m->notlp_marketing}}</span></p>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
@endsection



	