@extends('general')
@section('title', Lang::get('seo.hiatal-hernias.title') )
@section('keywords', Lang::get('seo.hiatal-hernias.keywords') )
@section('description', Lang::get('seo.hiatal-hernias.description') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title.png') }}); background-size: cover;">
    <div class="container ">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-title">
            <h2>@lang('hernia_hiatal.title')</h2>
            <p>@lang('hernia_hiatal.subtitle')</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="hernia_hiatal cont_info">
  <div class="container">
    <div class="section-content">
      <div class="row">
        <div class="col-md-8" style="visibility: visible; animation-name: fadeInLeft;">
        	@lang('hernia_hiatal.paragraph')
          <div class="visible-xs visible-sm">
            <img src="{{ asset('images/cirugia/hernia-hiatal.png') }}" />
          </div>
 			<h2 class="text-uppercase small-line text"> @lang('hernia_hiatal.causas_title') </h2>
 			@lang('hernia_hiatal.causas_paragraph')

      <h2 class="text-uppercase small-line text"> @lang('hernia_hiatal.sintomas_title') </h2>
      @lang('hernia_hiatal.sintomas_paragraph')
        </div>
        <div class="hidden-xs hidden-sm col-md-4" style="visibility: visible; animation-name: fadeInRight;">
          <img src="{{ asset('images/cirugia/hernia-hiatal.png') }}" />
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
