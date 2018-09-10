@extends('general')
@section('title', Lang::get('seo.gallery.title') )
@section('keywords', Lang::get('seo.gallery.keywords') )
@section('description', Lang::get('seo.gallery.description') )
@section('h1', Lang::get('gallery.title') )
@section('content')
	<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/hospital.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/hospital.png') }}); background-size: cover;">
	<div class="container ">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-title">
					<div class="title">@lang('gallery.title')</div>
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
                        @foreach($images as $image)
                        <div class="portfolio-item item-one">
                            <div class="thumb">
                                <img src="{{ asset('upload/galeria/' . $image->photo ) }}" alt="">
                                <div class="portfolio-hover">
                                    <div class="portfolio-btn">
                                        <a href="{{ asset('upload/galeria/' . $image->photo ) }}" class="popup-link" title="lightbox view"> <span class="icon-search"></span>  </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="portfolio-item item-two">
                            <div class="thumb">
                                <img src="https://img.youtube.com/vi/6CqYHG3WiN8/maxresdefault.jpg" alt="">
                                <div class="portfolio-hover">
                                    <div class="portfolio-btn">
                                        <a href="https://www.youtube.com/watch?v=6CqYHG3WiN8" class="popup-youtube" title="lightbox view"> <span class="icon-search"></span>  </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                          <div class="portfolio-item item-two">
                            <div class="thumb">
                              <img src="https://img.youtube.com/vi/Qx21dKk6wYc/maxresdefault.jpg" alt="">
                              <div class="portfolio-hover">
                                <div class="portfolio-btn">
                                  <a href="https://www.youtube.com/watch?v=Qx21dKk6wYc" class="popup-youtube" title="lightbox view"> <span class="icon-search"></span>  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="portfolio-item item-two">
                            <div class="thumb">
                              <img src="https://img.youtube.com/vi/mA8Mb8YMFkk/maxresdefault.jpg" alt="">
                              <div class="portfolio-hover">
                                <div class="portfolio-btn">
                                  <a href="https://www.youtube.com/watch?v=mA8Mb8YMFkk" class="popup-youtube" title="lightbox view"> <span class="icon-search"></span>  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="portfolio-item item-two">
                            <div class="thumb">
                              <img src="https://img.youtube.com/vi/6peGGmfQ5jg/maxresdefault.jpg" alt="">
                              <div class="portfolio-hover">
                                <div class="portfolio-btn">
                                  <a href="https://www.youtube.com/watch?v=6peGGmfQ5jg" class="popup-youtube" title="lightbox view"> <span class="icon-search"></span>  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="portfolio-item item-two">
                            <div class="thumb">
                              <img src="https://img.youtube.com/vi/IvLpNkUMBQs/maxresdefault.jpg" alt="">
                              <div class="portfolio-hover">
                                <div class="portfolio-btn">
                                  <a href="https://www.youtube.com/watch?v=IvLpNkUMBQs" class="popup-youtube" title="lightbox view"> <span class="icon-search"></span>  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="portfolio-item item-two">
                            <div class="thumb">
                              <img src="https://img.youtube.com/vi/uphjvCwamyM/maxresdefault.jpg" alt="">
                              <div class="portfolio-hover">
                                <div class="portfolio-btn">
                                  <a href="https://www.youtube.com/watch?v=uphjvCwamyM" class="popup-youtube" title="lightbox view"> <span class="icon-search"></span>  </a>
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="portfolio-item item-two">
                            <div class="thumb">
                              <img src="https://img.youtube.com/vi/s9Eu0j5EQf0/maxresdefault.jpg" alt="">
                              <div class="portfolio-hover">
                                <div class="portfolio-btn">
                                  <a href="https://www.youtube.com/watch?v=s9Eu0j5EQf0" class="popup-youtube" title="lightbox view"> <span class="icon-search"></span>  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="portfolio-item item-two">
                            <div class="thumb">
                              {{--<img src="https://img.youtube.com/vi/bMeuSf3BK84/hqdefault.jpg" alt="">--}}
                              <img src="https://i9.ytimg.com/vi/bMeuSf3BK84/mq1.jpg?sqp=CIiay9wF&rs=AOn4CLC9tTrJGyoUfDzbg3ovxubFSnnhoQ" alt="">
                              <div class="portfolio-hover">
                                <div class="portfolio-btn">
                                  <a href="https://www.youtube.com/watch?v=bMeuSf3BK84" class="popup-youtube" title="lightbox view"> <span class="icon-search"></span>  </a>
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
