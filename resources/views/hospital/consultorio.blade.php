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
					<div class="cont_image">
						<img src="{{ asset('/images/hospital/consultorio.jpg') }}" />
					</div>
					<p>
						@lang('consultorio.direccion')
					</p>
					<div style="text-align: right;">
						<a href="https://goo.gl/maps/gRP8G4SQWDB2" class="map" target="_blank"> @lang('cmq_premiere.mapa') </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@if(count( $photos ) > 0)
	@component('compgall',['certificates' => $photos, 'title' => Lang::get('cmq_premiere.instalacion'),'path' => '/images/hospital/' . $folder . '/','fn' => function($ce){return basename( $ce );} ])
	@endcomponent

	@component('compgal',['certificates' => $photos, 'title' => Lang::get('cmq_premiere.instalacion'),'path' => '/images/hospital/' . $folder . '/','fn' => function($ce){return basename( $ce );} ])
	@endcomponent	
@endif
<script type="application/ld+json">
	{
	  "@context": "http://schema.org/",
	  "@type": "Organization",
	  "name": "NEOmédica",
	  "address": {
	    "@type": "PostalAddress",
	    "streetAddress": "Av. Los Tules 160 int. 9 | Col. Díaz Ordaz",
	    "addressLocality": "Puerto Vallarta",
	    "addressRegion": "Jalisco",
	    "postalCode": "48310"
	  },
	  "telephone": "322 223 5521"
	}
</script>
@endsection