@extends('general')
@section('title', Lang::get('seo.testimonials.title') )
@section('keywords', Lang::get('seo.testimonials.keywords') )
@section('description', Lang::get('seo.testimonials.description') )
@section('h1', Lang::get('testimonio.title') . ' ' . Lang::get('testimonio.subtitle') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/hospital.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/hospital.png') }}); background-size: cover;">
	<div class="container ">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-title">
					<div class="title">@lang('testimonio.title')</div>
					<p>@lang('testimonio.subtitle')</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="testimoniales">
	<div class="container">
		<div class="section-content">
				<div class="row">
					<div class="">
						@foreach($testimoniales as $testimonial)
						<div class="testi col-md-4">
							<div class="cont">
								<div class="img_cont">
									<img src="{{ asset('upload/testimonial/'. $testimonial->photo_before) }}" />
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

			</div>
		</div>
	</section>
@endsection
