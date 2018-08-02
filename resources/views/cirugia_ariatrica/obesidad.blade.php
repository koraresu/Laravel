@extends('general')
@section('title', Lang::get('seo.obesity.title') )
@section('keywords', Lang::get('seo.obesity.keywords') )
@section('description', Lang::get('seo.obesity.description') )
@section('h1', Lang::get('obesidad.title') . ' ' . Lang::get('obesidad.subtitle') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/bariatrica.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/bariatrica.png') }}); background-size: cover;">
	<div class="container ">
	  <div class="row">
		<div class="col-md-12">
		  <div class="inner-title">
			<h2>@lang('obesidad.title')</h2>
			<p>@lang('obesidad.subtitle')</p>
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

			<h2 class="text-uppercase small-line text">@lang('obesidad.que-es.title')</h2>
			@lang('obesidad.que-es.paragraph')

			<h2 class="text-uppercase small-line text">@lang('obesidad.causa.title')</h2>
			@lang('obesidad.causa.paragraph')

			<h2 class="text-uppercase small-line text">@lang('obesidad.consecuencias.title')</h2>
			@lang('obesidad.consecuencias.paragraph')


		</div>
		<div class="col-md-4 sidebar" style="visibility: visible; animation-name: fadeInRight;">
		  <div class="title text-uppercase small-line text">@lang('obesidad.gastroenterologo.title')</div>
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
