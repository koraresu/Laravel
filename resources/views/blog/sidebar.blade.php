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
 @foreach($b_archive as $b)
 <article class="post">
  <figure class="post-thumb">
    <a href="#">
      <img class="" src="{{ asset('uploads/blog/thumb/'.$b->small_image_banner ) }}" alt="">
    </a>
  </figure>
  <h4>
    <a href="#"> {{ $b->titulo }}</a></h4>
    <div class="post-info">Oct 19<sup>th</sup>, 2016</div>
  </article>
  @endforeach


</div>


<!-- Archives -->
<div class="sidebar-widget archives-widget">
  <div class="sidebar-title">
   <h2 class="text-uppercase small-line text">@lang('blog.archivo')</h2>
 </div>

 <ul class="archives-list">
  @foreach($m_archive as $m)
  <li><a href="#" class="clearfix"><span class="pull-left">@lang('home.meses.'.$m->month) {{ $m->year }}</span> <span class="pull-right">( {{ $m->cuenta }})</span></a></li>
  @endforeach
</ul>

</div>
@if(isset($tags))
  <!-- Popular Tags -->
  <div class="sidebar-widget popular-tags">
    <div class="sidebar-title">
      <h2 class="text-uppercase small-line text">@lang('blog.tag')</h2>
    </div>
    @foreach($tags as $tag)
      <a href="#"> {{ $tag->GetTag()->nombre }} </a>
    @endforeach
  </div> 
@endif
</div>