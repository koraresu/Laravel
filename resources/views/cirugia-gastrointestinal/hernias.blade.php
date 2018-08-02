@extends('general')
@section('title', Lang::get('seo.hernias.title') )
@section('keywords', Lang::get('seo.hernias.keywords') )
@section('description', Lang::get('seo.hernias.description') )
@section('h1', Lang::get('hernias.title') . ' ' . Lang::get('hernias.subtitle') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title.png') }}); background-size: cover;">
    <div class="container ">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-title">
            <div class="title">@lang('hernias.title')</div>
            <p>@lang('hernias.subtitle')</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="hernias cont_info">
  <div class="container">
    <div class="section-content">
      <div class="row">
        <div class="col-md-8" style="visibility: visible; animation-name: fadeInLeft;">
        	@lang('hernias.paragraph')
			<h2 class="text-uppercase small-line text">@lang('hernias.tipos_title')</h2>
          	@lang('hernias.tipos_paragraph')
            <div class="visible-xs visible-sm">
              <img src="{{ asset('images/cirugia/hernias.png') }}" />
            </div>
 			<h2 class="text-uppercase small-line text"> @lang('hernias.causas_title') </h2>
 			@lang('hernias.causas_paragraph')

      <h2 class="text-uppercase small-line text"> @lang('hernias.sintomas_title') </h2>
      @lang('hernias.sintomas_paragraph')
        </div>
        <div class="hidden-xs hidden-sm col-md-4" style="visibility: visible; animation-name: fadeInRight;">
          <img src="{{ asset('images/cirugia/hernias.png') }}" />
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
