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
                


	                <article class="post clearfix pb20">
	                    <div class="blog-effect">
	                    	<a href="#">
	                    		<figure>
	                    			<img class="img-responsive" src="{{ asset('images/b1.jpg') }}" alt="">
	                    		</figure>
	                    	</a>
	                    </div>
	                    <div class="post-body">
	                      <div class="post-info">
	                      	<a href="#"> {{ $blog->created_at->format('M d,Y') }} </a>
	                      	
	                      	<a href="#"> - <span class="icon-pen"></span> @lang('blog.autor', ['name' => $blog->author ]) </a>
	                      </div>
	                      <h3 class="post-title">{{ $blog_trans->titulo }}</h3>
	                      {!! $blog_trans->descripcion !!}
	                    </div>
	                </article>




            </div>
            <div class="col-md-4">
              <div class="sidebar">
              
                  <!-- Search Form -->
                  <div class="sidebar-widget search-box">
                      <form method="post" action="index-mp-layout1.html">
                          <div class="form-group">
                              <input name="search-field" value="" placeholder="@lang('blog.search')" type="search">
                              <button type="submit">
                              	<span class="icon-search"></span>
                              </button>
                          </div>
                      </form>
                      
                  </div>
                  
                  
                  <!-- Popular Posts -->
                  <div class="sidebar-widget popular-posts">
                      <div class="sidebar-title">
                      	<h2 class="text-uppercase small-line text">@lang('blog.ultimas')</h2>
                      </div>
                      <article class="post">
                          <figure class="post-thumb"><a href="#"><img class="" src="images/blog/s1.jpg" alt=""></a></figure>
                          <h4><a href="#">GONE TO GHANA &ndash; VOLUNTEERING IN AFRICA</a></h4>
                          <div class="post-info">Oct 19<sup>th</sup>, 2016</div>
                      </article>
                      
                      <article class="post">
                          <figure class="post-thumb"><a href="#"><img src="images/blog/s2.jpg" alt=""></a></figure>
                          <h4><a href="#">GONE TO GHANA &ndash; VOLUNTEERING IN AFRICA</a></h4>
                          <div class="post-info">Oct 19<sup>th</sup>, 2016</div>
                      </article>
                      
                      <article class="post">
                          <figure class="post-thumb"><a href="#"><img src="images/blog/s3.jpg" alt=""></a></figure>
                          <h4><a href="#">GONE TO GHANA &ndash; VOLUNTEERING IN AFRICA</a></h4>
                          <div class="post-info">Oct 19<sup>th</sup>, 2016</div>
                      </article>
                      
                      
                  </div>
                  
                  
                  <!-- Archives -->
                  <div class="sidebar-widget archives-widget">
                      <div class="sidebar-title">
                      	<h2 class="text-uppercase small-line text">@lang('blog.archivo')</h2>
                      </div>
                      
                      <ul class="archives-list">
                          <li><a href="#" class="clearfix"><span class="pull-left">September 2016</span> <span class="pull-right">(25)</span></a></li>
                          <li><a href="#" class="clearfix"><span class="pull-left">August 2016</span> <span class="pull-right">(18)</span></a></li>
                          <li><a href="#" class="clearfix"><span class="pull-left">July 2016</span> <span class="pull-right">(72)</span></a></li>
                          <li><a href="#" class="clearfix"><span class="pull-left">June 2016</span> <span class="pull-right">(33)</span></a></li>
                          <li><a href="#" class="clearfix"><span class="pull-left">May 2016</span> <span class="pull-right">(12)</span></a></li>
                          <li><a href="#" class="clearfix"><span class="pull-left">April 2016</span> <span class="pull-right">(81)</span></a></li>
                      </ul>
                      
                  </div>
                  
                  <!-- Popular Tags -->
                  <div class="sidebar-widget popular-tags">
                      <div class="sidebar-title">
                      	<h2 class="text-uppercase small-line text">@lang('blog.tag')</h2>
                      </div>
                      
                      <a href="#">Education</a>
                      <a href="#">Crisis</a>
                      <a href="#">Water</a>
                      <a href="#">Business</a>
                      <a href="#">Giving</a>
                      <a href="#">Children</a>
                  </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection
