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
	@component('imc_component')
	<strong>Whoops!</strong> Something went wrong!
	@endcomponent
</section>
<section class="miembro">
	<div class="container">
		<div class="section-content">
			<div class="row">
				<h3 class="col-md-12">@lang('home.es-miembro')</h3>
				<div class="rasoc col-md-3 col-sm-6 col-xs-6">
					<img src="{{ asset('images/asoc/asociacion-mexicana-de-cirugia-general.png') }}" />
					<span> @lang('home.es-miembro-asoc-mex') </span>
				</div>
				<div class="rasoc col-md-3 col-sm-6 col-xs-6">
					<img src="{{ asset('images/asoc/asociacion-mexicana-de-cirugia-endoscopica-ac.png') }}" />
					<span> @lang('home.es-miembro-asoc-end') </span>
				</div>
				<div class="rasoc col-md-3 col-sm-6 col-xs-6">
					<img src="{{ asset('images/asoc/asociacion-mexicana-de-cirugia-general-2.png') }}" />
					<span> @lang('home.es-miembro-asoc-mex1') </span>
				</div>
				<div class="rasoc col-md-3 col-sm-6 col-xs-6">
					<img src="{{ asset('images/asoc/consejo-mexicano-de-cirugia-general-ac.png') }}" />
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
							<h5><a href="#"> @lang('home.gastro.est') </a></h5>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="service-box style-1">
						<div class="service-box-overlay"></div>
						<div class="service-box-content">
							<h5><a href="#"> @lang('home.gastro.ves') </a></h5>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="service-box style-1">
						<div class="service-box-overlay"></div>
						<div class="service-box-content">
							<h5><a href="#"> @lang('home.gastro.hem') </a></h5>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="service-box style-1">
						<div class="service-box-overlay"></div>
						<div class="service-box-content">
							<h5><a href="#"> @lang('home.gastro.ape') </a></h5>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="service-box style-1">
						<div class="service-box-overlay"></div>
						<div class="service-box-content">
							<h5><a href="#"> @lang('home.gastro.gas') </a></h5>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="service-box style-1">
						<div class="service-box-overlay"></div>
						<div class="service-box-content">
							<h5><a href="#"> @lang('home.gastro.coli') </a></h5>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="service-box style-1">
						<div class="service-box-overlay"></div>
						<div class="service-box-content">
							<h5><a href="#"> @lang('home.gastro.colo') </a></h5>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="service-box style-1">
						<div class="service-box-overlay"></div>
						<div class="service-box-content">
							<h5><a href="#"> @lang('home.gastro.her') </a></h5>
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
						<div class="team-img"> <img class="img-fullwidth img-responsive" src="{{ asset('upload/doctor/'.$doctor->photo) }}" alt=""> </div>
						<div class="img-title">
							<h4> {{ $doctor->title }} {{ $doctor->name }} </h4>
							<p> {{ $doctor->speciality }} </p>
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
