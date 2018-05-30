@extends('general')
@section('title', Lang::get('title.home') )
@section('description', Lang::get('description.home') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title.png') }}); background-size: cover;">
    <div class="container ">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-title">
            <h2>@lang('apendicitis.title')</h2>
            <p>@lang('apendicitis.subtitle')</p>
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
        	@lang('apendicitis.paragraph')
			<h2 class="text-uppercase small-line text">@lang('apendicitis.sintomas_title')</h2>
          	@lang('apendicitis.sintomas_paragraph')

 			<h2 class="text-uppercase small-line text"> @lang('apendicitis.diagnostico_title') </h2>
 			@lang('apendicitis.diagnostico_paragraph')
        </div>
        <div class="col-md-4" style="visibility: visible; animation-name: fadeInRight;">
          <img src="{{ asset('images/cirugia/apendicitis.png') }}" />
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
