@extends('general')
@section('title', Lang::get('title.home') )
@section('description', Lang::get('description.home') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title.png') }}); background-size: cover;">
	<div class="container ">
	  <div class="row">
		<div class="col-md-12">
		  <div class="inner-title">
			<h2>@lang('colielitiasis.title')</h2>
			<p>@lang('colielitiasis.subtitle')</p>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <section class="apendicitis cont_info">
  <div class="container">
	<div class="section-content">
	  <div class="row">
		<div class="col-md-8" style="visibility: visible; animation-name: fadeInLeft;">
			@lang('colielitiasis.paragraph')

			<h2 class="text-uppercase small-line text">@lang('colielitiasis.sintomas_title')</h2>
			@lang('colielitiasis.sintomas_paragraph')
			
			<h2 class="text-uppercase small-line text"> @lang('colielitiasis.factores_title') </h2>
			@lang('colielitiasis.factores_paragraph')
			
			<h2 class="text-uppercase small-line text"> @lang('colielitiasis.complicaciones_title') </h2>
			@lang('colielitiasis.complicaciones_paragraph')
			
			<h2 class="text-uppercase small-line text"> @lang('colielitiasis.diagnostico_title') </h2>
			@lang('colielitiasis.diagnostico_paragraph')

			<h2 class="text-uppercase small-line text"> @lang('colielitiasis.tratamiento_title') </h2>
			@lang('colielitiasis.tratamiento_paragraph')

		</div>
		<div class="col-md-4" style="visibility: visible; animation-name: fadeInRight;">
		  <img src="{{ asset('images/cirugia/colietiliatisis.png') }}" />
		</div>
	  </div>
	</div>
  </div>
</section>
@endsection
