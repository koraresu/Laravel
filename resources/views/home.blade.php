@extends('general')
@section('title', Lang::get('seo.home.title') )
@section('keywords', Lang::get('seo.home.keywords') )
@section('description', Lang::get('seo.home.description') )
@section('content')
<!-- start of hero -->
<section class="hero hero-slider-wrapper">
	<div class="emergencies">
		<span class="icon-movil"></span>
		<div class="right">
			<span> @lang('home.urgencias') </span>
			<span> @lang('home.movil') </span>
		</div>
	</div>
	<div class="hero-slider">
		@foreach($slides as $ss)
			<div class="slide">
				<img src="{{ asset('upload/slideshow/'.$ss->photo) }}" />
				<div class="title">
					<span>{{ $ss->title }}</span>
					<h1>{{ $ss->subtitle }}</h1>
				</div>
			</div>
		@endforeach

	</div>
</section>
<!-- end hero slider --> 
<section class="tag">
	<span> @lang('home.dr') </span>
	<span> @lang('home.dr-certificado') </span>
	<span> @lang('home.dr-especialista') </span>
</section>
<!-- Section: who-we-are & Latest Project -->
<section class="who-we-are">
	<div class="container">
		<div class="section-content">
			<div class="row">
				<div class="col-md-9">
					<div>
						<p>
							@lang('home.who-we-are')
						</p>
					</div>
					<div class="col-md-6">
						<div class="home_team_med">
							<span class="icon-invoice"></span>
							<h4>@lang('home.who-team')</h4>
							<p>
								@lang('home.who-team-desc')
							</p>
							<a href=""> Conozca Más </a>
						</div>


					</div>
					<div class="col-md-6">
						<div class="home_care">
							<span class="icon-care"></span>
							<h4>@lang('home.care')</h4>
							@lang('home.care-desc')
						</div>
					</div>

				</div>
				<div class="col-md-3">
					<div>
						<h3 class="text-uppercase small-line mb20">@lang('home.atencion')</h3>
						@lang('home.atencion-desc')
					</div>
					<div>
						<h3 class="text-uppercase small-line mb20">@lang('home.urgencia')</h3>
						@lang('home.urgencia-desc')
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<section class="calculator-imc">
	
	<div class="container">
		<div class="section-content">
			<div class="row">
				<div class="imc-message col-md-3 col-sm-6 col-xs-12">

					<h3 class="text-uppercase small-line mb20">@lang('home.imc.title')</h3>
					@lang('home.imc.desc')
				</div>
				<div class="imc-form col-md-5 col-sm-12 col-xs-12">
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
				<div class="imc-resultado col-md-4 col-sm-6 col-xs-12">
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
<section class="miembro">
	<div class="container">
		<div class="section-content">
			<div class="row">
				<h3 class="col-md-12">@lang('home.es-miembro')</h3>
				<div class="rasoc col-md-3 col-sm-6 col-xs-6">
					<div class="image">
						<span class="helper"></span>
						<img src="{{ asset('images/asoc/asociacion-mexicana-de-cirugia-general.png') }}" />
					</div>
					<span> @lang('home.es-miembro-asoc-mex') </span>
				</div>
				<div class="rasoc col-md-3 col-sm-6 col-xs-6">
					<div class="image">
						<span class="helper"></span>
						<img src="{{ asset('images/asoc/asociacion-mexicana-de-cirugia-endoscopica-ac.png') }}" />
					</div>
					<span> @lang('home.es-miembro-asoc-end') </span>
				</div>
				<div class="rasoc col-md-3 col-sm-6 col-xs-6">
					<div class="image">
						<span class="helper"></span>
						<img src="{{ asset('images/asoc/asociacion-mexicana-de-cirugia-general-2.png') }}" />
					</div>
					<span> @lang('home.es-miembro-asoc-mex1') </span>
				</div>
				<div class="rasoc col-md-3 col-sm-6 col-xs-6">
					<div class="image">
						<span class="helper"></span>
						<img src="{{ asset('images/asoc/consejo-mexicano-de-cirugia-general-ac.png') }}" />
					</div>
					<span> @lang('home.es-miembro-asoc-cir') </span>
				</div>
			</div>
		</div>
	</div>
</section>






<section class="our-department">
	<div class="container ptn">
		<div class="section-title">
			<div class="row">
				<div class="col-md-12">
					<h6> @lang('home.gastro.subtitle') </h6>
					<h2> @lang('home.gastro.title') </h2>
				</div>
			</div>
		</div>
		<div class="section-wrap">
			<div class="row">

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="service-box style-1">
						<div class="service-box-overlay"></div>
						<div class="service-box-content">
							<h5>@lang('home.gastro.est')</h5>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="service-box style-1">
						<div class="service-box-overlay"></div>
						<div class="service-box-content">
							<h5>@lang('home.gastro.ves')</h5>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="service-box style-1">
						<div class="service-box-overlay"></div>
						<div class="service-box-content">
							<h5>@lang('home.gastro.hem')</h5>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="service-box style-1">
						<div class="service-box-overlay"></div>
						<div class="service-box-content">
							<h5><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.gastrointestinal_apendicitis') }}"> @lang('home.gastro.ape') </a></h5>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="service-box style-1">
						<div class="service-box-overlay"></div>
						<div class="service-box-content">
							<h5>@lang('home.gastro.gas')</h5>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="service-box style-1">
						<div class="service-box-overlay"></div>
						<div class="service-box-content">
							<h5>@lang('home.gastro.coli')</h5>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="service-box style-1">
						<div class="service-box-overlay"></div>
						<div class="service-box-content">
							<h5>@lang('home.gastro.colo')</h5>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="service-box style-1">
						<div class="service-box-overlay"></div>
						<div class="service-box-content">
							<h5><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.gastrointestinal_hernias') }}"> @lang('home.gastro.her') </a></h5>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="team">
	<div class="container ptn">
		<div class="section-title">
			<div class="row">
				<div class="col-md-12">
					<h6>@lang('home.team.title')</h6>
					<h2>@lang('home.team.subtitle')</h2>
				</div>
			</div>
		</div>
		<div class="section_wrap">
			<div class="row">
				<div class="carousel-col-3">
					@foreach ($doctors as $doctor)
					<div class="team-item item">
						<div class="team-img">
							<a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.drs', ['dr' => $doctor->url ]) }}">
								<img class="img-fullwidth img-responsive" src="{{ asset('upload/doctor/'.$doctor->photo) }}" alt="">
							</a>
						</div>
						<div class="img-title">
							<h4><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.drs', ['dr' => $doctor->url ]) }}"> {{ $doctor->title }} {{ $doctor->name }} </a></h4>
							<p><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.drs', ['dr' => $doctor->url ]) }}"> {{ $doctor->speciality }} </a></p>
						</div>
					</div>
					@endforeach



				</div>
			</div>
		</div>
	</div>
</section>
<section class="testimonial">
	<div class="container">
		<div class="section-content">
			<h5 class="col-md-12">@lang('home.testimonial.title')</h3>
				<h3 class="col-md-12">@lang('home.testimonial.subtitle')</h3>
				<div class="desc">
					@lang('home.testimonial.desc')
				</div>

				<div class="row">
					<div class="">
						@foreach($testimoniales as $testimonial)
						<div class="testi col-md-4">
							<div class="cont">
								<div class="img_cont">
									<div class="juxtapose" data-startingposition="50" data-showlabels="true" data-showcredits="true" data-animate="true">
										<img src="{{ asset('upload/testimonial/'. $testimonial->photo_before) }}" />
										<img src="{{ asset('upload/testimonial/'. $testimonial->photo_after) }}" />
									</div>
								</div>
								<div class="img_desc">
									<p> {{ $testimonial->description }} </p>
									<div class="img_name"> {{ $testimonial->patient }} </div>
									<div class="img_surg"> {{ $testimonial->surgery }} </div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<div class="foot">
					<a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.testimonios') }}" class="more">@lang('home.testimonial.more') </a>
					<span> @lang('home.testimonial.special')</span>
				</div>

			</div>
		</div>
	</section>
	<section class="video">
		<video class="afterglow" id="my-video" width="1920" height="1080"data-youtube-id="_cebmtTGS90"></video>
	</section>
	<section class="vallarta" style="background-image: url( {{ asset('images/vallarta.jpg') }} ); background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center txt-color-white text-uppercase">
					<h3>@lang('home.vallarta.title')</h3>
					<p>
						@lang('home.vallarta.desc')
					</p>
					<a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.puerto_vallarta') }}" class="btn theme-btn mt20">@lang('home.vallarta.more')</a>
				</div>
			</div>
		</div>
	</section>
	@endsection
