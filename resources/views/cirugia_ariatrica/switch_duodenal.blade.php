@extends('general')
@section('title', Lang::get('seo.switch_duodenal.title') )
@section('keywords', Lang::get('seo.switch_duodenal.keywords') )
@section('description', Lang::get('seo.switch_duodenal.description') )
@section('h1', Lang::get('switch_duodenal.title') . ' ' . Lang::get('switch_duodenal.subtitle') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/bariatrica.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/bariatrica.png') }}); background-size: cover;">
	<div class="container ">
	  <div class="row">
		<div class="col-md-12">
		  <div class="inner-title">
			<div class="title">@lang('switch_duodenal.title')</div>
			<p>@lang('switch_duodenal.subtitle')</p>
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
			@lang('switch_duodenal.paragraph')
			<div class="visible-xs visible-sm">
              <img src="{{ asset('images/cirugia/switch_duodenal.png') }}" />
            </div>

            <h2 class="text-uppercase small-line text">@lang('switch_duodenal.consiste_title')</h2>
			@lang('switch_duodenal.consiste_paragraph')
			
			<h2 class="text-uppercase small-line text">@lang('switch_duodenal.factores_title')</h2>
			@lang('switch_duodenal.factores_paragraph')

		</div>
		<div class="hidden-xs hidden-sm col-md-4" style="visibility: visible; animation-name: fadeInRight;">
		  <img src="{{ asset('images/cirugia/switch_duodenal.png') }}" />
		</div>
	  </div>
	</div>
  </div>
</section>
@endsection