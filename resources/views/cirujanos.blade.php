@extends('general')
@section('title', Lang::get('seo.staff.title') )
@section('keywords', Lang::get('seo.staff.keywords') )
@section('description', Lang::get('seo.staff.description') )
@section('h1', Lang::get('obesidad.gastroenterologo.title') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/bariatrica.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/bariatrica.png') }}); background-size: cover;">
	<div class="container ">
	  <div class="row">
		<div class="col-md-12">
		  <div class="inner-title">
			<div class="title">@lang('staff.title')</div>
			<p>@lang('staff.subtitle')</p>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <section class="staff cont_info">
  <div class="container">
	<div class="section-content">
	  <div class="row">
		<div class="col-md-8" style="visibility: visible; animation-name: fadeInLeft;">
			@foreach ($doctors as $key => $doctor)
				<div class="col-md-6">
					<div class="team-item item">
						<div class="team-img">
							@if($key)
								<a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.drs', ['dr' => $doctor->url ]) }}">
							@else
								<a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.dr_sergio') }}">
							@endif
								<img class="img-fullwidth img-responsive" src="{{ asset('upload/doctor/'.$doctor->photo) }}" alt="">
							</a>
						</div>
						<div class="img-title">
							<h2 class="h"> {{ $doctor->title }} {{ $doctor->name }} {{ $doctor->speciality }} </h2>
							<h4>
								@if($key)
									<a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.drs', ['dr' => $doctor->url ]) }}"> {{ $doctor->title }} {{ $doctor->name }} </a>
								@else
									<a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.dr_sergio') }}"> {{ $doctor->title }} {{ $doctor->name }} </a>
								@endif
							</h4>
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
				<li> <h3> @lang('obesidad.gastroenterologo.lista.abdominal') </h3></li>
				<li> <h3> @lang('obesidad.gastroenterologo.lista.estrenimiento') </h3></li>
				<li> <h3> @lang('obesidad.gastroenterologo.lista.vesicula') </h3></li>
				<li> <h3> @lang('obesidad.gastroenterologo.lista.hemorroides') </h3></li>
				<li> <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.gastrointestinal_apendicitis') }}">@lang('obesidad.gastroenterologo.lista.apendicitis')</a> </li>
				<li> <h3> @lang('obesidad.gastroenterologo.lista.gastritis') </h3></li>
				<li> <h3> @lang('obesidad.gastroenterologo.lista.colitis') </h3></li>
				<li> <h3> @lang('obesidad.gastroenterologo.lista.colon') </h3></li>
				<li> <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.gastrointestinal_hernias') }}">@lang('obesidad.gastroenterologo.lista.hernias')</a> </li>
			</ul>
		</div>
	  </div>
	</div>
  </div>
</section>
@endsection
