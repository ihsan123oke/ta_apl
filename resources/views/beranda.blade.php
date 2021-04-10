@extends('layouts.main')
@section('content')
	<!-- END nav -->
	<!-- Jumbotron -->
	<section class="hero-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center">
				<div class="col-lg-12 col-md-6 ftco-animate d-flex align-items-end">
					<div class="text">
						<h1 class="mb-3" style="font-size: 3.5rem;">Temukan Hunian Nyaman <span>Anda bersama Anugerah
								Pratama
								Lazuardi</span></h1>
						<p><a href="#" class="btn py-3 px-4" style="background-color: #FD4500;color:white;">View all
								properties</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end Jumbotron -->
	
	
	<!-- services -->
	<section class="ftco-section ftco-no-pb ftco-no-pt" style="background-color: #E85F2C;">
		<div class="container">
			<div class="row d-flex no-gutters">
				<div class=" col-md-3 d-flex align-items-stretch ftco-animate">
					<div class="media block-6 services services-bg d-block text-center px-4 py-5"
						style=" background-color: #E85F2C;">
						<div class="icon d-flex justify-content-center align-items-center"><span
								class="flaticon-business"></span></div>
						<div class="media-body py-md-4">
							<h3>Lokasi Strategis</h3>
							<p>Lokasi yang strategis dan mudah dijangkau merupakan target kami untuk mempermudah
								konsumen memenuhi kubutuhan.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-items-stretch ftco-animate">
					<div class="media block-6 services services-bg services-darken d-block text-center px-4 py-5"
						style="background-color: #FA7341;">
						<div class="icon d-flex justify-content-center align-items-center"><span
								class="flaticon-home"></span></div>
						<div class="media-body py-md-4">
							<h3>Proses KPR mudah</h3>
							<p>Kami akan membantu anda dalam melakukan proses pencairan KPR dengan uang muka minimum
								untuk mendapatkan rumah hunian yang diimpikan.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-items-stretch ftco-animate">
					<div class="media block-6 services services-bg services-lighten d-block text-center px-4 py-5"
						style=" background-color: #EA6C3D;">
						<div class="icon d-flex justify-content-center align-items-center"><span
								class="flaticon-stats"></span></div>
						<div class="media-body py-md-4">
							<h3>Harga yang Bersaing</h3>
							<p>Kami hadir untuk membantu masyarakat yang menginginkan rumah minimalis dengan harga yang
								terjangkau.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-items-stretch ftco-animate">
					<div class="media block-6 services services-bg d-block text-center px-4 py-5 "
						style="background-color: #E85F2C;">
						<div class="icon d-flex justify-content-center align-items-center"><span
								class="flaticon-quarantine"></span></div>
						<div class="media-body py-md-4">
							<h3>Terpercaya</h3>
							<p>Kami telah menyelesaikan sepuluh proyek dengan menjaga kualitas dan kepuasan konsumen.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end services -->
	<!-- promo -->
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">Best Deal</span>
					<h2 class="mb-2">Promo</h2>
				</div>
				@foreach($promo as $pr)
				<div class="col-md-4 mt-4">
					<div class="cardi profile-card-5">
						<div class="card-img-block">
							<img class="card-img-top" src="{{ url('/data_file/'.$pr->file) }}" alt="Card image cap">
						</div>
						<div class="card-body pt-0">
							<h5 class="card-title">{{ $pr->nama_promo }}</h5>
							<p class="card-text" style="text-align:justify">{{ $pr->deskripsi_promo}}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="row justify-content-center my-5">
				<div>
					<a href="{{ url('/ktk') }}" class="btn py-3 px-4" style="background-color: #FD4500;color:white;">Hubungi Sekarang</a>
				</div>
			</div>
		</div>
	</section>
	<!-- end promo -->
	
	<!-- tipe rumah -->
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">Tipe Rumah</span>
					<h2 class="mb-2">Properti Unggulan</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-properties owl-carousel">
						<!-- tipe -->
						@foreach($tipe as $t)
						<div class="item">
							<div class="property-wrap ftco-animate">
								<a href="{{ url('/prt/'.$t->tipe_id)}}" class="img" style="background-image: url( {{ url('/data_file/'.$t->file) }} );">
								</a>
								<div class="text">
									<ul class="property_list">
										<li>{{$t->deskripsi_tipe}}</li>
									</ul>
									<h3>{{ $t->nama_tipe }}</h3>
									<h3>Rp. {{number_format($t->harga,2,',','.')}}</h3>
									@foreach($proyek as $p)
									@if($p->proyek_id === $t->proyek_id)
									<span class="location">{{$p->nama_proyek}}</span>
									@endif
									@endforeach
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end tipe rumah -->
	<!-- project -->
	<section class="ftco-section ftco-no-pt">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">Proyek</span>
					<h2 class="mb-2">Proyek Berjalan</h2>
				</div>
				<div class="card-grid">
					@foreach($proyek as $p)
					<a class="card" href="{{ url('/pyk/'.$p->proyek_id) }}">
						<div class="card__background"
							style="background-image: url( {{ url('/data_file/'.$p->file) }} )">
						</div>
						<div class="card__content">
							<p class="card__category">Proyek</p>
							<h3 class="card__heading">{{ $p->nama_proyek}}</h3>
							<p class="card__category">{{$p->alamat_proyek}}</p>
						</div>
					</a>
					@endforeach
				</div>
			</div>
	</section>
	<!-- end project -->
	<!-- cara pesan -->
	<section class="ftco-section services-section bg-darken">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Booking</span>
					<h2 class="mb-3">Cara Booking</h2>
				</div>
			</div>
		</div>
	</section>
	<!-- end cara pesan -->
	<!-- marketing -->
	<section class="ftco-section testimony-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Marketing</span>
					<h2 class="mb-3">Hubungi Marketing kami</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						@foreach($marketing as $m)
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-phone"></span>
									<p class="mb-4">Untuk melakukan proses booking, silahkan hubungi marketing kami.
										<br>
										<br>Email : {{ $m->email_marketing}}
										<br>No. Telp : {{ $m->notlp_marketing}}</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url( {{ url('/data_file/'.$m->file) }} )"></div>
										<div class="pl-3">
											<p class="name">{{ $m->nama_marketing}}</p>
											<span class="position">{{ $m->jabatan}}</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end marketing -->

