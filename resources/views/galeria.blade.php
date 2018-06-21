@extends('general')
@section('title', Lang::get('seo.gallery.title') )
@section('keywords', Lang::get('seo.gallery.keywords') )
@section('description', Lang::get('seo.gallery.description') )
@section('content')
	<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/hospital.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/hospital.png') }}); background-size: cover;">
	<div class="container ">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-title">
					<h2>@lang('gallery.title')</h2>
					<p>@lang('gallery.subtitle')</p>
				</div>
			</div>
		</div>
	</div>
</section>
	 <section class="gallery">
          <div class="container-fluid">
            <div class="section-wrap">
                <div class="row clearfix ">
                <div class="portfolio-filter-item mb30 text-center">
                        <ul class="portfolio-filter">
                            <li class="active"><a href="#" data-filter="*">@lang('gallery.all')</a></li>
                            <li><a href="#" data-filter=".item-one">@lang('gallery.photo')</a></li>
                            <li><a href="#" data-filter=".item-two">@lang('gallery.video')</a></li>
                        </ul>
                    </div>
                    <div class="portfolio col-4 gutter-less mtn">
                        <div class="portfolio-item item-one">
                            <div class="thumb">
                                <img src="{{ asset('upload/galeria/bariatric-surgeon.jpg') }}" alt="">
                                <div class="portfolio-hover">
                                    <div class="portfolio-btn">
                                        <a href="{{ asset('upload/galeria/bariatric-surgeon.jpg') }}" class="popup-link" title="lightbox view"> <span class="icon-search"></span>  </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
       </section>

@endsection
