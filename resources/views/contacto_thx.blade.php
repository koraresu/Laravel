@extends('general')
@section('title', Lang::get('seo.contacto.title') )
@section('keywords', Lang::get('seo.contacto.keywords') )
@section('description', Lang::get('seo.contacto.description') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/hospital.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/hospital.png') }}); background-size: cover;">
	<div class="container ">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-title">
					<h2>@lang('contacto.title')</h2>
					<p>@lang('contacto.subtitle')</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contacto cont_info">
	<div class="container">
		<div class="section-content">
			<div class="row">
				<div class="col-md-8">

					<img src=" {{ asset('/images/one_medica.png') }}" />
					<p>@lang('contacto.direccion')</p>
					<div class="comunicacion row">
						<div class="col-md-6">
							<div class="left">
								<span class="icon-phone"></span>
							</div>
							<div class="right">
								<span> CITAS </span>
								<span> 322 223 5521</span>
								<span>Resto del País LADA (01 322)</span>
							</div>
						</div>
						<div class="col-md-6">
							
							<div class="left">
								<span class="icon-movil"></span>
							</div>
							<div class="right">
								<span> URGENCIAS </span>
								<span> 322 150 6291 </span>
								<span> Resto del País LADA (045 322) </span>
							</div>
						</div>
					</div>
					Gracias
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

@endsection
