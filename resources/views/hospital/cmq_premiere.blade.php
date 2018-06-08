@extends('general')
@section('title', Lang::get('seo.cmq-premiere.title') )
@section('keywords', Lang::get('seo.cmq-premiere.keywords') )
@section('description', Lang::get('seo.cmq-premiere.description') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/hospital.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/hospital.png') }}); background-size: cover;">
	<div class="container ">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-title">
					<h2>@lang('cmq_premiere.title')</h2>
					<p>@lang('cmq_premiere.subtitle')</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="cmq_premiere cont_info">
	<div class="container">
		<div class="section-content">
			<div class="row">
				<div class="col-md-8">
					@lang('cmq_premiere.paragraph')
				</div>
				<div class="col-md-4 sidebar">
					<a href="">
						<img src="{{ asset('/images/hospital/cmq_premiere.png') }}" />
					</a>
					<p>
						@lang('cmq_premiere.direccion')
					</p>
					<div style="text-align: right;">
						<a href="#" class="modal_map map"> @lang('cmq_premiere.mapa') </a>
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