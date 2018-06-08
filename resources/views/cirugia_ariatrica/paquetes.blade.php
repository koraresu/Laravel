@extends('general')
@section('title', Lang::get('seo.packages.title') )
@section('keywords', Lang::get('seo.packages.keywords') )
@section('description', Lang::get('seo.packages.description') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/bariatrica.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/bariatrica.png') }}); background-size: cover;">
	<div class="container ">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-title">
					<h2>@lang('paquetes_bariatrica.title')</h2>
					<p>@lang('paquetes_bariatrica.subtitle')</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="our-department">
	<div class="container">
		<div class="section-wrap">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="service-box style-1">
						<div class="service-box-overlay"></div>
						<div class="service-box-content">
							<img src="{{ asset('images/cirugia/sleeve_icon.png') }}" />
							<h5><a href="#"> @lang('paquete_bariatrica.manga') </a></h5>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="service-box style-1">
						<div class="service-box-overlay"></div>
						<div class="service-box-content">
							<img src="{{ asset('images/cirugia/bypass_icon.png') }}" />
							<h5><a href="#"> @lang('paquete_bariatrica.bypass') </a></h5>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="service-box style-1">
						<div class="service-box-overlay"></div>
						<div class="service-box-content">
							<img src="{{ asset('images/cirugia/sleeve_icon.png') }}" />
							<h5><a href="#"> @lang('paquete_bariatrica.switch') </a></h5>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
</section>

<section class="includes_packages">
	<div class="container ptn">
		<div class="section-content">
			<h2 class="text-uppercase small-line text">@lang('paquete_bariatrica.pkg_title')</h2>
		</div>
		<div class="section-wrap">
			<div class="row">

				<div class="col-md-4">
					<div class="home_team_med row_one">
						@lang('paquete_bariatrica.honorarios.icon')
						<h4> @lang('paquete_bariatrica.honorarios.title') </h4>
						<p> @lang('paquete_bariatrica.honorarios.paragraph') </p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="home_team_med row_one">
						@lang('paquete_bariatrica.prueba_laboratorio.icon')
						<h4> @lang('paquete_bariatrica.prueba_laboratorio.title') </h4>
						<p> @lang('paquete_bariatrica.prueba_laboratorio.paragraph') </p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="home_team_med row_one">
						@lang('paquete_bariatrica.ekg.icon')
						<h4> @lang('paquete_bariatrica.ekg.title') </h4>
						<p> @lang('paquete_bariatrica.ekg.paragraph') </p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="home_team_med row_two">
						@lang('paquete_bariatrica.consulta.icon')
						<h4> @lang('paquete_bariatrica.consulta.title') </h4>
						<p> @lang('paquete_bariatrica.consulta.paragraph') </p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="home_team_med row_two">
						@lang('paquete_bariatrica.medicamento.icon')
						<h4> @lang('paquete_bariatrica.medicamento.title') </h4>
						<p> @lang('paquete_bariatrica.medicamento.paragraph') </p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="home_team_med row_two">
						@lang('paquete_bariatrica.hospital.icon')
						<h4> @lang('paquete_bariatrica.hospital.title') </h4>
						<p> @lang('paquete_bariatrica.hospital.paragraph') </p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="home_team_med row_three">
						@lang('paquete_bariatrica.transporte.icon')
						<h4> @lang('paquete_bariatrica.transporte.title') </h4>
						<p> @lang('paquete_bariatrica.transporte.paragraph') </p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="home_team_med row_three">
						@lang('paquete_bariatrica.hotel.icon')
						<h4> @lang('paquete_bariatrica.hotel.title') </h4>
						<p> @lang('paquete_bariatrica.hotel.paragraph') </p>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
@endsection
