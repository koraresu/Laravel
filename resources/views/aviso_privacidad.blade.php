@extends('general')
@section('title', Lang::get('title.home') )
@section('description', Lang::get('description.home') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/hospital.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/hospital.png') }}); background-size: cover;">
	<div class="container ">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-title">
					<h2>@lang('aviso_privacidad.title')</h2>
					<p>@lang('aviso_privacidad.subtitle')</p>
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
					@lang('aviso_privacidad.paragraph')
				</div>
				<div class="hidden-xs hidden-sm col-md-4 sidebar">
					<img src="{{ asset('/images/aviso-privacidad.png') }}" />
				</div>
			</div>
		</div>
	</div>
</section>

@endsection