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
	
	<div class="container">
		<div class="section-content">
			<div class="row">
				<div class="imc-message col-md-4 col-sm-6 col-xs-12">

					<h3 class="text-uppercase small-line mb20">@lang('home.imc.title')</h3>
					@lang('home.imc.desc')
				</div>
				<div class="imc-form col-md-4 col-sm-12 col-xs-12">
					<div class="col-md-12">
						<div class="metrico col-md-6 col-sm-6  col-xs-6">
							<label class="radio_button">
								<div class="radio_cont">
									<input type="radio" name="imc-type" value="metrico" checked="checked" /> 
									<div class="control_indicator"></div>
								</div>
								<span> @lang('home.imc.metrico') </span>
							</label>
						</div>
						<div class="metrico col-md-6 col-sm-6  col-xs-6">
							<label class="radio_button">
								<div class="radio_cont">
									
										<input type="radio" name="imc-type" value="imperial" />
										<div class="control_indicator"></div>
								</div>
								<span> @lang('home.imc.imperial') </span>
							</label>
						</div>
					</div>

					<div class="col-md-12">
						<div class="altura col-md-6 col-sm-6  col-xs-6">
							<label>
								@lang('home.imc.altura.title')
								<input type="text" id="imc_altura" data-metric="@lang('home.imc.altura.metric')" data-imperial="@lang('home.imc.altura.imperial')" placeholder="@lang('home.imc.altura.metric')" />
							</label>
						</div>
						<div class="peso col-md-6 col-sm-6  col-xs-6">
							<label>
								@lang('home.imc.peso.title')
								<input type="text" id="imc_peso" data-metric="@lang('home.imc.peso.metric')" data-imperial="@lang('home.imc.peso.imperial')"  placeholder="@lang('home.imc.peso.metric')" />
							</label>
						</div>
					</div>

					<div class="botones col-md-12">
						<div class="borrar col-md-6 col-sm-6  col-xs-6">
							<input type="reset" value="Borrar" />
						</div>
						<div class="calcular col-md-6 col-sm-6  col-xs-6">
							<input type="button" value="Calcular" />
						</div>
					</div>


				</div>
				<div class="imc-resultado col-md-3 col-sm-6 col-xs-12">
					<div class="imc-de"> @lang('home.imc.tu-imc')</div>
					<div class="imc-res" id="imc_res">  </div>
					<ul>

						<li class="imc-description" data-min="20" data-max="25">
							<div class="imc-range"> @lang('imc.no_requiere_range') </div>
							<div class="imc-desc" id="imc_desc"> @lang('imc.no_requiere_message') </div>
						</li>

						<li class="imc-description" data-min="25.1" data-max="29.9">
							<div class="imc-range"> @lang('imc.posible_range') </div>
							<div class="imc-desc" id="imc_desc"> @lang('imc.posible_message') </div>
						</li>

						<li class="imc-description" data-min="30" data-max="35">
							<div class="imc-range"> @lang('imc.necesita_one_range') </div>
							<div class="imc-desc" id="imc_desc"> @lang('imc.necesita_one_message') </div>
						</li>

						<li class="imc-description" data-min="35.1" data-max="40">
							<div class="imc-range"> @lang('imc.necesita_two_range') </div>
							<div class="imc-desc" id="imc_desc"> @lang('imc.necesita_two_message') </div>
						</li>

						<li class="imc-description" data-min="40.1" data-max="50">
							<div class="imc-range"> @lang('imc.necesita_three_range') </div>
							<div class="imc-desc" id="imc_desc"> @lang('imc.necesita_three_message') </div>
						</li>

						<li class="imc-description" data-min="50.1" data-max="60">
							<div class="imc-range"> @lang('imc.super_range') </div>
							<div class="imc-desc" id="imc_desc"> @lang('imc.super_message') </div>
						</li>

						<li class="imc-description" data-min="60.1" data-max="100">
							<div class="imc-range"> @lang('imc.supersuper_range') </div>
							<div class="imc-desc" id="imc_desc"> @lang('imc.supersuper_message') </div>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</div>


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
