@extends('general')
@section('title', Lang::get('seo.staff.title') )
@section('keywords', Lang::get('seo.staff.keywords') )
@section('description', Lang::get('seo.staff.description') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/bariatrica.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/bariatrica.png') }}); background-size: cover;">
	<div class="container ">
	  <div class="row">
		<div class="col-md-12">
		  <div class="inner-title">
			<h2>@lang('staff.title')</h2>
			<p>@lang('staff.subtitle')</p>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <section class="obesidad cont_info">
  <div class="container">
	<div class="section-content">
	  <div class="row">
		<div class="col-md-8" style="visibility: visible; animation-name: fadeInLeft;">
			@foreach ($doctors as $doctor)
				<div class="col-md-6">
					<div class="team-item item">
						<div class="team-img">
							<img class="img-fullwidth img-responsive" src="{{ asset('upload/doctor/'.$doctor->photo) }}" alt="">
						</div>
						<div class="img-title">
							<h4><a href="{{ LaravelLocalization::getLocalizedURL( 'es', $doctor->url ) }}"> {{ $doctor->url }} {{ $doctor->title }} {{ $doctor->name }} </a> </h4>
							<p> {{ $doctor->speciality }} </p>
						</div>
					</div>
				</div>
			@endforeach
		</div>
		<div class="col-md-4 sidebar" style="visibility: visible; animation-name: fadeInRight;">
		  <h2 class="text-uppercase small-line text">@lang('obesidad.gastroenterologo.title')</h2>
			<p>@lang('obesidad.gastroenterologo.paragraph')</p>
			<ul>
				<li> @lang('obesidad.gastroenterologo.lista.abdominal') </li>
				<li> @lang('obesidad.gastroenterologo.lista.estrenimiento') </li>
				<li> @lang('obesidad.gastroenterologo.lista.vesicula') </li>
				<li> @lang('obesidad.gastroenterologo.lista.hemorroides') </li>
				<li> @lang('obesidad.gastroenterologo.lista.apendicitis') </li>
				<li> @lang('obesidad.gastroenterologo.lista.gastritis') </li>
				<li> @lang('obesidad.gastroenterologo.lista.colitis') </li>
				<li> @lang('obesidad.gastroenterologo.lista.colon') </li>
				<li> @lang('obesidad.gastroenterologo.lista.hernias') </li>
			</ul>
		</div>
	  </div>
	</div>
  </div>
</section>
@endsection
