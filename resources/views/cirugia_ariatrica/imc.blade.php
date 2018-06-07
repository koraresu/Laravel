@extends('general')
@section('title', Lang::get('seo.imc.title') )
@section('keywords', Lang::get('seo.imc.keywords') )
@section('description', Lang::get('seo.imc.description') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/bariatrica.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/bariatrica.png') }}); background-size: cover;">
	<div class="container ">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-title">
					<h2>@lang('imc.full.title')</h2>
					<p>@lang('imc.full.subtitle')</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="calculator-imc calculator-section-imc">
	@component('imc_component')
	@endcomponent
</section>
<section class="clasificacion-imc">
	<div class="container">
		<div class="section-content">
			<p> @lang('imc.clasificacion.paragraph')  </p>
			<div class="section-title">
				<h3 class="text-uppercase small-line mb20"> @lang('imc.clasificacion.title')  </h3>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="desc_block">
						<div class="circle fir"></div>
						<div class="desc">
							<span class="block_bold"> @lang('imc.clasificacion.class.desorden.range') </span>
							<span> @lang('imc.clasificacion.class.desorden.desc') </span>
						</div>
					</div>

					<div class="desc_block">
						<div class="circle sec"></div>
						<div class="desc">
							<span class="block_bold"> @lang('imc.clasificacion.class.normal.range') </span>
							<span> @lang('imc.clasificacion.class.normal.desc') </span>
						</div>
					</div>

					<div class="desc_block">
						<div class="circle fou"></div>
						<div class="desc">
							<span class="block_bold"> @lang('imc.clasificacion.class.sobrepeso.range') </span>
							<span> @lang('imc.clasificacion.class.sobrepeso.desc') </span>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="desc_block">
						<div class="circle fiv"></div>
						<div class="desc">
							<span class="block_bold"> @lang('imc.clasificacion.class.obesidad_i.range') </span>
							<span> @lang('imc.clasificacion.class.obesidad_i.desc') </span>
						</div>
					</div>

					<div class="desc_block">
						<div class="circle six"></div>
						<div class="desc">
							<span class="block_bold"> @lang('imc.clasificacion.class.obesidad_ii.range') </span>
							<span> @lang('imc.clasificacion.class.obesidad_ii.desc') </span>
						</div>
					</div>

					<div class="desc_block">
						<div class="circle sev"></div>
						<div class="desc">
							<span class="block_bold"> @lang('imc.clasificacion.class.obesidad_iii.range') </span>
							<span> @lang('imc.clasificacion.class.obesidad_iii.desc') </span>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="desc_block">
						<div class="circle eig"></div>
						<div class="desc">
							<span class="block_bold"> @lang('imc.clasificacion.class.super.range') </span>
							<span> @lang('imc.clasificacion.class.super.desc') </span>
						</div>
					</div>

					<div class="desc_block">
						<div class="circle nin"></div>
						<div class="desc">
							<span class="block_bold"> @lang('imc.clasificacion.class.supersuper.range') </span>
							<span> @lang('imc.clasificacion.class.supersuper.desc') </span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<p> @lang('imc.clasificacion.pd') </p>
	</div>
</section>
@endsection
