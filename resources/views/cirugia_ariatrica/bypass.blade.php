@extends('general')
@section('title', Lang::get('seo.bypass.title') )
@section('keywords', Lang::get('seo.bypass.keywords') )
@section('description', Lang::get('seo.bypass.description') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/bariatrica.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/bariatrica.png') }}); background-size: cover;">
	<div class="container ">
	  <div class="row">
		<div class="col-md-12">
		  <div class="inner-title">
			<h2>@lang('bypass.title')</h2>
			<p>@lang('bypass.subtitle')</p>
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
			@lang('bypass.paragraph')
			<div class="visible-xs visible-sm">
              <img src="{{ asset('images/cirugia/bypass.png') }}" />
            </div>
			<h2 class="text-uppercase small-line text">@lang('bypass.consiste_title')</h2>
			@lang('bypass.consiste_paragraph')

			<h2 class="text-uppercase small-line text">@lang('bypass.factores_title')</h2>
			@lang('bypass.factores_paragraph')

		</div>
		<div class="hidden-xs hidden-sm col-md-4" style="visibility: visible; animation-name: fadeInRight;">
		  <img src="{{ asset('images/cirugia/bypass.png') }}" />
		</div>
	  </div>
	</div>
  </div>
</section>
@endsection
