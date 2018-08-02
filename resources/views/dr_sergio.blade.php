@extends('general')
@section('title', $seo_title )
@section('keywords', $seo_keywords )
@section('description', $seo_description )
@section('h1', $title .' '. $name .' '. Lang::get('home.nosotros') )
@section('content')



<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/gastrointestinal.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/gastrointestinal.png') }}); background-size: cover;">
	<div class="container ">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-title">
					<div class="title">{{ $title}} {{ $name}}</div>
					<p>@lang('home.nosotros')</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="cirujano cont_info">
	<div class="container">
		<div class="section-content">
			<div class="row">
				<div class="visible-xs visible-sm col-md-4 sidebar" style="visibility: visible; animation-name: fadeInRight;">
					<img class="img-fullwidth img-responsive" src="{{ asset('upload/doctor/'.$photo) }}" alt="">
					<div class="cirujano_info">
						@lang('dr_sergio.acerca')						
					</div>
					<div class="cirujano_asociado row">
						<h5> @lang('dr_sergio.miembro') </h5>
						@foreach ($members as $member)
						<div class="member col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="image">
								<span class="helper"></span>
								<img src="{{ asset('upload/member/'.$member->photo) }}" />
							</div>
							<span> {{ $member->name }} </span>
						</div>
						@endforeach

					</div>
				</div>
				<div class="col-md-8" style="visibility: visible; animation-name: fadeInLeft;">

					<h2 class="text-uppercase small-line text">
						@lang('dr_sergio.estudios.title')
					</h2>
					@lang('dr_sergio.estudios.paragraph')
					<h2 class="text-uppercase small-line text">
						@lang('dr_sergio.especialidad.title')
					</h2>
					@lang('dr_sergio.especialidad.paragraph')
					<h2 class="text-uppercase small-line text">
						@lang('dr_sergio.certificaciones.title')
					</h2>
					@lang('dr_sergio.certificaciones.paragraph')

				</div>
				<div class="hidden-xs hidden-sm col-md-4 sidebar" style="visibility: visible; animation-name: fadeInRight;">
					<img class="img-fullwidth img-responsive" src="{{ asset('upload/doctor/'.$photo) }}" alt="">
					<div class="cirujano_info">
						@lang('dr_sergio.acerca')						
					</div>
					<div class="cirujano_asociado row">
						<h5> @lang('dr_sergio.miembro') </h5>
						@foreach ($members as $member)
						<div class="member col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="image">
								<span class="helper"></span>
								<img src="{{ asset('upload/member/'.$member->photo) }}" />
							</div>
							<span> {{ $member->name }} </span>
						</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	@if(count( $certificates ) > 0)
		<section class="gallery">
			<div class="container">
				<div class="section-title">
					<h2 class="text-uppercase small-line text">@lang('cirujano.certificados')</h2>
				</div>
				<div class="section-content">
					<div class="row">

						@foreach($certificates as $certificate)
						<div class="col-md-3">
							<a href="#" class="modal_image">
								<img src="{{ url('/upload/certificate/' . $certificate->photo ) }}" />
							</a>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
	@endif
@endsection