@extends('general')
@section('title', Lang::get('seo.error.title') )
@section('keywords', Lang::get('seo.error.keywords') )
@section('description', Lang::get('seo.error.description') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/hospital.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/hospital.png') }}); background-size: cover;">
  <div class="container ">
    <div class="row">
      <div class="col-md-12">
        <div class="inner-title">
          <h2>@lang('error.500.title')</h2>
          <p>@lang('error.500.subtitle')</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="error cont_info">
  <div class="container">
    <div class="section-content">
      <h2>@lang('error.500.error')</h2>
      <h3>@lang('error.500.status')</h3>
      <div class="message"> @lang('error.500.desc')  </div>
      <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , '/') }}"> RETURN HOME </a>
    </div>
  </div>
</section>

@endsection