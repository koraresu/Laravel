@extends('general')
@section('title', Lang::get('seo.vallarta.title') )
@section('keywords', Lang::get('seo.vallarta.keywords') )
@section('description', Lang::get('seo.vallarta.description') )
@section('content')
<section class="overlay overlay_vallarta title_section " data-bg-image="{{ asset('images/puerto_vallarta.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/puerto_vallarta.png') }}); background-size: cover;">
	<div class="container ">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-title">
					<h2>@lang('vallarta.title')</h2>
					<p>@lang('vallarta.subtitle')</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="obesidad cont_info">
	<div class="container">
		<div class="section-content">
			<div class="row">
				<div class="col-md-8">

					<h2 class="text-uppercase small-line text">@lang('vallarta.porque.title')</h2>
					@lang('vallarta.porque.paragraph')
				</div>
				<div class="col-md-4 sidebar">
					<h2 class="text-uppercase small-line text">@lang('vallarta.gastroenterologo.title')</h2>
					<p>@lang('vallarta.gastroenterologo.paragraph')</p>
					<ul>
						<li> @lang('vallarta.gastroenterologo.lista.abdominal') </li>
						<li> @lang('vallarta.gastroenterologo.lista.estrenimiento') </li>
						<li> @lang('vallarta.gastroenterologo.lista.vesicula') </li>
						<li> @lang('vallarta.gastroenterologo.lista.hemorroides') </li>
						<li> @lang('vallarta.gastroenterologo.lista.apendicitis') </li>
						<li> @lang('vallarta.gastroenterologo.lista.gastritis') </li>
						<li> @lang('vallarta.gastroenterologo.lista.colitis') </li>
						<li> @lang('vallarta.gastroenterologo.lista.colon') </li>
						<li> @lang('vallarta.gastroenterologo.lista.hernias') </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="gallery">
	<div class="container">
		<div class="section-content">
			<div class="row">

				@foreach($photos as $filename)
				<div class="col-md-3">
					<a href="#" class="modal_image">
						<img src="{{ url('/images/vallarta/' . basename( $filename ) ) }}" />
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
@endsection
