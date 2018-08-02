@extends('general')
@section('title', Lang::get('seo.cmq-nayarit.title') )
@section('keywords', Lang::get('seo.cmq-nayarit.keywords') )
@section('description', Lang::get('seo.cmq-nayarit.description') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/hospital.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/hospital.png') }}); background-size: cover;">
	<div class="container ">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-title">
					<h2>@lang('cmq_nayarit.title')</h2>
					<p>@lang('cmq_nayarit.subtitle')</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="cmq_nayarit cont_info">
	<div class="container">
		<div class="section-content">
			<div class="row">
				<div class="col-md-8">
					@lang('cmq_nayarit.paragraph')
				</div>
				<div class="col-md-4 sidebar">
					<a href="">
						<img src="{{ asset('/images/hospital/cmq_nayarit.png') }}" />
					</a>
					<p>
						@lang('cmq_nayarit.direccion')
					</p>
					<div style="text-align: right;">
						<a href="https://goo.gl/maps/96UJDQrdLys" class="map" target="_blank">@lang('cmq_nayarit.mapa') </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="gallery">
	<div class="container">
		<div class="section-title">
			<h2 class="text-uppercase small-line text">@lang('cmq_nayarit.instalacion')</h2>
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

<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Organization",
  "name": "CMQ RIVIERA NAYARIT",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Av. Heroes de Nacozari 280, Bucerías",
    "addressLocality": "Riviera Nayarit",
    "addressRegion": "Nayarit",
    "postalCode": "63732"
  },
}
</script>

@endsection