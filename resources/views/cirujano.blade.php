@extends('general')
@section('title', $seo_title )
@section('keywords', $seo_keywords )
@section('description', $seo_description )
@section('h1', $title .' '. $name .' '. Lang::get('home.nosotros') )
@section('content')
	<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/bariatrica.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/bariatrica.png') }}); background-size: cover;">
		<div class="container ">
			<div class="row">
				<div class="col-md-12">
					<div class="inner-title">
						<div class="title">{{ $title}} {{ $name}}</div>
						<p>@lang('home.nosotros')</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="cirujano cont_info">
		<div class="container">
			<div class="section-content">
				<div class="row">
					<div class="visible-xs visible-sm col-md-4 sidebar" style="visibility: visible; animation-name: fadeInRight;">
						<img class="img-fullwidth img-responsive" src="{{ asset('upload/doctor/'.$photo) }}" alt="">
						<div class="cirujano_info">
							<h5> @lang('cirujano.contacto') </h5>
							<ul>
								<li>@lang('cirujano.phone',['phone' => $phone ])</li>
								<li>@lang('cirujano.especialidad',['speciality' => $speciality])</li>
								<li>@lang('cirujano.educacion',['education' => $education ])</li>
								@if($days != '')
								<li>@lang('cirujano.days',['days' => $days ])</li>
								@endif
							</ul>
						</div>
						<div class="cirujano_asociado">
							<h5> @lang('cirujano.miembro') </h5>
							@foreach ($members as $member)
							<div class="member col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="image">
									<span class="helper"></span>
									<img src="{{ asset('upload/member/'.$member->photo) }}" />
									</div>
									<span> {{ $member->name }} </span>
								</div>
								@endforeach

							</div>
						</div>
					</div>
					<div class="col-md-8" style="visibility: visible; animation-name: fadeInLeft;">

						<h2 class="text-uppercase small-line text"> @lang('cirujano.acerca', [
							'title' => $title,
							'name' => $name
						])</h2>
						{!! $description !!}

						<h2 class="text-uppercase small-line text">@lang('cirujano.experiencia')</h2>
						{!! $laboral !!}

						<h2 class="text-uppercase small-line text">@lang('cirujano.chequeo')</h2>
						{!! $chequeo !!}

						<h2 class="text-uppercase small-line text">@lang('cirujano.premios')</h2>
						{!! $reconocimientos !!}




					</div>
					<div class="hidden-xs hidden-sm col-md-4 sidebar" style="visibility: visible; animation-name: fadeInRight;">
						<img class="img-fullwidth img-responsive" src="{{ asset('upload/doctor/'.$photo) }}" alt="">
						<div class="cirujano_info">
							<h5> @lang('cirujano.contacto') </h5>
							<ul>
								<li>@lang('cirujano.phone',['phone' => $phone ])</li>
								<li>@lang('cirujano.especialidad',['speciality' => $speciality])</li>
								<li>@lang('cirujano.educacion',['education' => $education ])</li>
								@if($days != '')
									<li>@lang('cirujano.days',['days' => $days ])</li>
								@endif
							</ul>
						</div>
						<div class="cirujano_asociado">
							@if(count($members) > 0)
								<h5> @lang('cirujano.miembro') </h5>
								@foreach ($members as $member)
									<div class="member col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="image">
											<span class="helper"></span>
											<img src="{{ asset('upload/member/'.$member->photo) }}" />
										</div>
										<span> {{ $member->name }} </span>
									</div>
								@endforeach
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@if(count( $certificates ) > 0)
		@component('compgall',['certificates' => $certificates, 'title' => Lang::get('cirujano.certificados'),'path' => '/upload/certificate/','fn' => function($ce){return $ce->photo;} ])
		@endcomponent

		@component('compgal',['certificates' => $certificates, 'title' => Lang::get('cirujano.certificados'),'path' => '/upload/certificate/','fn' => function($ce){return $ce->photo;} ])
		@endcomponent	
	@endif

	



	


@endsection