@extends('general')
@section('title', Lang::get('seo.revision_bariatrica.title') )
@section('keywords', Lang::get('seo.revision_bariatrica.keywords') )
@section('description', Lang::get('seo.revision_bariatrica.description') )
@section('h1', Lang::get('revision_bariatrica.title') . ' ' . Lang::get('revision_bariatrica.subtitle') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/bariatrica.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/bariatrica.png') }}); background-size: cover;">
	<div class="container ">
	  <div class="row">
		<div class="col-md-12">
		  <div class="inner-title">
			<div class="title">@lang('revision_bariatrica.title')</div>
			<p>@lang('revision_bariatrica.subtitle')</p>
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
			@lang('revision_bariatrica.paragraph')
			<div class="visible-xs visible-sm">
              <img src="{{ asset('images/cirugia/revision_bariatrica.png') }}" />
            </div>

			<h2 class="text-uppercase small-line text">@lang('revision_bariatrica.factores_title')</h2>
			@lang('revision_bariatrica.factores_paragraph')

		</div>
		<div class="hidden-xs hidden-sm col-md-4" style="visibility: visible; animation-name: fadeInRight;">
		  <img src="{{ asset('images/cirugia/revision_bariatrica.png') }}" />
		</div>
	  </div>
	</div>
  </div>
</section>
@endsection
