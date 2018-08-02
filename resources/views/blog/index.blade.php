@extends('general')
@section('title', '' )
@section('keywords', '' )
@section('description', '' )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/hospital.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/hospital.png') }}); background-size: cover;">
	<div class="container ">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-title">
					<h2>@lang('blog.title')</h2>
					<p>@lang('blog.subtitle')</p>
				</div>
			</div>
		</div>
	</div>
</section>
  <section class="blog">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-8">
                @foreach($articles as $article)
	                <article class="post clearfix pb20">
	                    <div class="blog-effect">
	                    	<a href="#">
	                    		<figure>
	                    			<img class="img-responsive" src="{{ asset('upload/blog/'.$blog->image_banner ) }}" alt="">
	                    		</figure>
	                    	</a>
	                    </div>
	                    <div class="post-body">
	                      <div class="post-info">
	                      	<a href="#"> {{ $article->created_at->format('M d,Y') }} </a>
	                      	
	                      	<a href="#"> - <span class="icon-pen"></span> @lang('blog.autor', ['name' => $article->author ]) </a>
	                      </div>
	                      <h3 class="post-title">{{ $article->titulo }}</h3>
                        <div>
                          {!! $article->previo !!}
                        </div>
	                      <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.blog-article',['slug' => $article->slug ]) }}" class="btn theme-btn mt10"> @lang('blog.read-more') </a>
	                    </div>
	                </article>
                @endforeach
            </div>
            <div class="col-md-4">
              @component('blog.sidebar',[
                'b_archive' => $b_archive,
                'm_archive' => $m_archive
              ])
              @endcomponent
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection
