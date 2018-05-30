@extends('general')
@section('title', Lang::get('title.home') )
@section('description', Lang::get('description.home') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/bariatrica.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/bariatrica.png') }}); background-size: cover;">
	<div class="container ">
	  <div class="row">
		<div class="col-md-12">
		  <div class="inner-title">
			<h2>@lang('manga_gastrica.title')</h2>
			<p>@lang('manga_gastrica.subtitle')</p>
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
			@lang('manga_gastrica.paragraph')

			<h2 class="text-uppercase small-line text">@lang('manga_gastrica.consiste_title')</h2>
			@lang('manga_gastrica.consiste_paragraph')

			<h2 class="text-uppercase small-line text">@lang('manga_gastrica.factores_title')</h2>
			@lang('manga_gastrica.factores_paragraph')

		</div>
		<div class="col-md-4" style="visibility: visible; animation-name: fadeInRight;">
		  <img src="{{ asset('images/cirugia/manga-gastrica.png') }}" />
		</div>
	  </div>
	</div>
  </div>
</section>
@endsection
