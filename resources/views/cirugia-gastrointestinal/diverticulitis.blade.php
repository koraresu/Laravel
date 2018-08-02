@extends('general')
@section('title', Lang::get('seo.diverticulitis.title') )
@section('keywords', Lang::get('seo.diverticulitis.keywords') )
@section('description', Lang::get('seo.diverticulitis.description') )
@section('h1', Lang::get('diverticulitis.title') . ' ' . Lang::get('diverticulitis.subtitle') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title.png') }}); background-size: cover;">
    <div class="container ">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-title">
            <div class="title">@lang('diverticulitis.title')</div>
            <p>@lang('diverticulitis.subtitle')</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="diverticulitis cont_info">
  <div class="container">
    <div class="section-content">
      <div class="row">
        <div class="col-md-8" style="visibility: visible; animation-name: fadeInLeft;">
        	@lang('diverticulitis.paragraph')
          <div class="visible-xs visible-sm">
        <img src="{{ asset('images/cirugia/diveticulitis.png') }}" />
      </div>
      <h2 class="text-uppercase small-line text">@lang('diverticulitis.diverticulos_title')</h2>
            @lang('diverticulitis.diverticulos_paragraph')
			<h2 class="text-uppercase small-line text">@lang('diverticulitis.sintomas_title')</h2>
          	@lang('diverticulitis.sintomas_paragraph')

 			<h2 class="text-uppercase small-line text"> @lang('diverticulitis.recomendaciones_title') </h2>
 			@lang('diverticulitis.recomendaciones_paragraph')
        </div>
        <div class="hidden-xs hidden-sm col-md-4" style="visibility: visible; animation-name: fadeInRight;">
          <img src="{{ asset('images/cirugia/diveticulitis.png') }}" />
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
