@extends('general')
@section('title', Lang::get('seo.consultorio.title') )
@section('keywords', Lang::get('seo.consultorio.keywords') )
@section('description', Lang::get('seo.consultorio.description') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/hospital.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/hospital.png') }}); background-size: cover;">
	<div class="container ">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-title">
					<h2>@lang('consultorio.title')</h2>
					<p>@lang('consultorio.subtitle')</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="consultorio cont_info">
	<div class="container">
		<div class="section-content">
			<div class="row">
				<div class="col-md-8">
					@lang('consultorio.paragraph')
					<div class="comunicacion row">
						<div class="col-md-6">
							<div class="left">
								<span class="icon-phone"></span>
							</div>
							<div class="right">
								<span> @lang('home.citas.title') </span>
								<span> @lang('home.citas.phone')</span>
								<span>@lang('home.citas.rest')</span>
							</div>
						</div>
						<div class="col-md-6">
							
							<div class="left">
								<span class="icon-movil"></span>
							</div>
							<div class="right">
								<span> @lang('home.urgency.title') </span>
								<span> @lang('home.urgency.phone') </span>
								<span> @lang('home.urgency.rest') </span>
							</div>
						</div>
					</div>
					@lang('consultorio.paragraph2')
				</div>
				<div class="col-md-4 sidebar">
					<a href="">
						<img src="{{ asset('/images/hospital/consultorio.png') }}" />
					</a>
					<p>
						@lang('consultorio.direccion')
					</p>
					<div style="text-align: right;">
						<a href="" class="map"> @lang('cmq_premiere.mapa') </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="gallery">
	<div class="container">
		<div class="section-title">
			<h2 class="text-uppercase small-line text">@lang('cmq_premiere.instalacion')</h2>
		</div>
		<div class="section-content">
			<div class="row">

				@foreach($photos as $filename)
					<div class="col-md-3">
						<a href="#" class="modal_image">
							<img src="{{ url('/images/hospital/' . $folder . '/' . basename( $filename ) ) }}" />
						</a>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
@endsection