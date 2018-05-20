@extends('general')

@section('title', 'Page Title')

@section('content')
    <!-- start of hero -->
  <section class="hero hero-slider-wrapper">
    <div class="hero-slider">
      <div class="slide"> <img src="images/slider/group-4.png" alt>
        <div class="title"> <span>NUESTRAS CIRUGÍAS SON REALIZADAS CON</span>
          <h1>LAPAROSCOPÍA</h1>
          <a href="#" class="btn theme-btn">Buy Now</a> </div>
      </div>
      <div class="slide"> <img src="images/slider/group-4.png" alt>
        <div class="title"> <span>NUESTRAS CIRUGÍAS SON REALIZADAS CON</span>
          <h1>LAPAROSCOPÍA</h1>
          <a href="#" class="btn theme-btn">Buy Now</a> </div>
      </div>
      
    </div>
  </section>
  <!-- end hero slider --> 
  
  <!-- Section: who-we-are & Latest Project -->
  <section class="who-we-are">
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-md-8 wow fadeInLeft animated">
            <h2 class="text-uppercase small-line text">Why <span class="text-theme-color">Choose Us ?</span></h2>
            <h4 class="mt20 mb20 text-theme-color">Lorem ipsum dolor sit amet consectetur adipisicing elit Perferendis repudiandae nostrum quibusdam! elit Perferendis repudiandae</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident tempora perspiciatis quod commodi iure neque eaque quos, consequuntur expedita dolorem dicta dignissimos.</p>
            <div class="row">
              <div class="col-sm-4 col-md-4">
                <div class="service-item"> <i class="flaticon-syringe-2 pb20"></i>
                  <h5><a href="#">Professional Doctors </a></h5>
                  <p>Aliquam erat volutpat. Phasellus a purus. </p>
                </div>
              </div>
              <div class="col-sm-4 col-md-4">
                <div class="service-item"> <i class="flaticon-perfusion pb20"></i>
                  <h5><a href="#">Exclusive Blood Bank</a></h5>
                  <p>Aliquam erat volutpat. Phasellus a purus. </p>
                </div>
              </div>
              <div class="col-sm-4 col-md-4">
                <div class="service-item"> <i class="flaticon-pills-1 pb20"></i>
                  <h5><a href="#">Free services</a></h5>
                  <p>Aliquam erat volutpat. Phasellus a purus. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 wow fadeInRight animated">
            <h3 class="text-uppercase small-line mb20">Working<span class="text-theme-color"> Hours</span></h3>
            <div class="latest-project">
              <ul class="hours_wigdet">
                <li>Monday<span>09:00-20:00</span></li>
                <li>Tuesday<span>09:00-21:00</span></li>
                <li>Wednesday<span>09:00-20:00</span></li>
                <li>Thursday<span>24-Hour Shift</span></li>
                <li>Friday<span>09:00-21:00</span></li>
                <li>Saturday<span>09:00-18:00</span></li>
                <li>Sunday<span>11:00-19:00</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section: Our Departments -->
  <section class="our-department">
    <div class="container ptn">
      <div class="section-title">
        <div class="row">
          <div class="col-md-4">
            <h6>Latest work</h6>
            <h2>Our <span> Departments</span></h2>
          </div>
          <div class="col-md-7">
            <p>Sed malesuada nunc sit amet quam hendrerit, mollis vulputate risus tristique. Quisque dapibus eros et dolor accumsan, sit amet interdum tortor imperdiet.</p>
          </div>
        </div>
      </div>
      <div class="section-wrap">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="service-box style-1" style="background-image:url(images/service/1.jpg);">
              <div class="service-box-overlay"></div>
              <i class="flaticon-stomach-1"></i>
              <div class="service-box-content">
                <h5><a href="#">Gastroenterology</a></h5>
                <a href="#">Read More</a> </div>
              <!-- service-box-content --> 
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-box style-1" style="background-image:url(images/service/2.jpg);">
              <div class="service-box-overlay"></div>
              <i class="flaticon-heart"></i>
              <div class="service-box-content">
                <h5><a href="#">cardiology </a></h5>
                <a href="#">Read More</a> </div>
              <!-- service-box-content --> 
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-box style-1" style="background-image:url(images/service/3.jpg);">
              <div class="service-box-overlay"></div>
              <i class="flaticon-lungs"></i>
              <div class="service-box-content">
                <h5><a href="single-service.html">pulamonalpry</a></h5>
                <a href="#">Read More</a> </div>
              <!-- service-box-content --> 
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-box style-1" style="background-image:url(images/service/4.jpg);">
              <div class="service-box-overlay"></div>
              <i class="flaticon-liver"></i>
              <div class="service-box-content">
                <h5><a href="single-service.html">ophthakmology </a></h5>
                <a href="#">Read More</a> </div>
              <!-- service-box-content --> 
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-box style-1" style="background-image:url(images/service/5.jpg);">
              <div class="service-box-overlay"></div>
              <i class="flaticon-uterus"></i>
              <div class="service-box-content">
                <h5><a href="single-service.html">urology </a></h5>
                <a href="#">Read More</a> </div>
              <!-- service-box-content --> 
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-box style-1" style="background-image:url(images/service/6.jpg);">
              <div class="service-box-overlay"></div>
              <i class="flaticon-teeth-10"></i>
              <div class="service-box-content">
                <h5><a href="single-service.html">Dental Care</a></h5>
                <a href="#">Read More</a> </div>
              <!-- service-box-content --> 
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-box style-1" style="background-image:url(images/service/7.jpg);">
              <div class="service-box-overlay"></div>
              <i class="flaticon-skeleton"></i>
              <div class="service-box-content">
                <h5><a href="single-service.html">Radiology </a></h5>
                <a href="#">Read More</a> </div>
              <!-- service-box-content --> 
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-box style-1" style="background-image:url(images/service/8.jpg);">
              <div class="service-box-overlay"></div>
              <i class="flaticon-brain"></i>
              <div class="service-box-content">
                <h5><a href="single-service.html">Neurology</a></h5>
                <a href="#">Read More</a> </div>
              <!-- service-box-content --> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section: Divider -->
  <section class="style-two overlayer default-overlay parallax" data-bg-image="images/bg/bg6.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center txt-color-white text-uppercase">
          <h3>When a machine begins to run without human aid, it is time to scrap it - whether it be a dpsn <span class="text-theme-color">factory or a government.</span></h3>
          <a href="#" class="btn theme-btn mt20">Contact Us</a> </div>
      </div>
    </div>
  </section>
  
  <!-- Section: Our Departments -->
  <section class="our-department">
    <div class="container">
      <div class="section-title">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h6>WE CARE ABOUT PATIENT</h6>
            <h2>OUR OUTSTANDING<span> SERVICES</span></h2>
            <p>Sed malesuada nunc sit amet quam hendrerit, mollis vulputate risus tristique. Quisque dapibus eros et dolor accumsan, sit amet interdum tortor imperdiet.</p>
          </div>
        </div>
      </div>
      <div class="section-wrap">
        <div class="row"> 
          <!--Column-->
          <div class="col-md-4 col-sm-6 med-icon">
            <article class="inner-box">
              <div class="icon"><span class="icofont icofont-ambulance"></span></div>
              <div class="content">
                <h4>Emergency Care</h4>
                <div class="text">
                  <p>Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus. Donec malesuada efficitur dapibus.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-4 col-sm-6 med-icon">
            <article class="inner-box">
              <div class="icon"><span class="icofont icofont-blood"></span></div>
              <div class="content">
                <h4>Blood Test</h4>
                <div class="text">
                  <p>Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus. Donec malesuada efficitur dapibus.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-4 col-sm-6 med-icon">
            <article class="inner-box">
              <div class="icon"><span class="icofont icofont-icu"></span></div>
              <div class="content">
                <h4>Outdoor Checkup</h4>
                <div class="text">
                  <p>Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus. Donec malesuada efficitur dapibus.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-4 col-sm-6 med-icon">
            <article class="inner-box">
              <div class="icon"><span class="icofont icofont-drug-pack"></span></div>
              <div class="content">
                <h4>Pharmacy Support</h4>
                <div class="text">
                  <p>Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus. Donec malesuada efficitur dapibus.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-4 col-sm-6 med-icon">
            <article class="inner-box">
              <div class="icon"><span class="icofont icofont-first-aid-alt"></span></div>
              <div class="content">
                <h4>24/7 Special Service</h4>
                <div class="text">
                  <p>Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus. Donec malesuada efficitur dapibus.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-4 col-sm-6 med-icon">
            <article class="inner-box">
              <div class="icon"><span class="icofont icofont-aids"></span></div>
              <div class="content">
                <h4>Cancer Service</h4>
                <div class="text">
                  <p>Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus. Donec malesuada efficitur dapibus.</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section: Team -->
  <section class="team">
    <div class="container ptn">
      <div class="section-title">
        <div class="row">
          <div class="col-md-4">
            <h6>professional expert</h6>
            <h2>Our <span>Experienced Team</span></h2>
          </div>
          <div class="col-md-7">
            <p>Sed malesuada nunc sit amet quam hendrerit, mollis vulputate risus tristique. Quisque dapibus eros et dolor accumsan, sit amet interdum tortor imperdiet.</p>
          </div>
        </div>
      </div>
      <div class="section_wrap">
        <div class="row">
          <div class="carousel-col-3">
            <div class="team-item item">
              <div class="team-img"> <img class="img-fullwidth img-responsive" src="images/team/1.jpg" alt=""> </div>
              <div class="img-title">
                <h4><a href="team-details.html">Treeman More</a></h4>
                <p>Cardiologist & Surgeon</p>
              </div>
              <div class="team-icon">
                <ul>
                  <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                  <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                  <li><a href="#"><span class="fa fa-skype"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="team-item item">
              <div class="team-img"> <img class="img-fullwidth img-responsive" src="images/team/2.jpg" alt=""> </div>
              <div class="img-title">
                <h4><a href="team-details.html">Martin Jon</a></h4>
                <p>Gynecologist & Surgeon</p>
              </div>
              <div class="team-icon">
                <ul>
                  <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                  <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                  <li><a href="#"><span class="fa fa-skype"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="team-item item">
              <div class="team-img"> <img class="img-fullwidth img-responsive" src="images/team/3.jpg" alt=""> </div>
              <div class="img-title">
                <h4><a href="team-details.html">Wilson Jarry</a></h4>
                <p>Dentist</p>
              </div>
              <div class="team-icon">
                <ul>
                  <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                  <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                  <li><a href="#"><span class="fa fa-skype"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="team-item item">
              <div class="team-img"> <img class="img-fullwidth img-responsive" src="images/team/4.jpg" alt=""> </div>
              <div class="img-title">
                <h4><a href="team-details.html">Willeam Jonson</a></h4>
                <p>Neurologist & Surgeon </p>
              </div>
              <div class="team-icon">
                <ul>
                  <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                  <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                  <li><a href="#"><span class="fa fa-skype"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--Gallery Style One-->
  <section class="gallery-one overlayer default-overlay parallax" data-bg-image="images/bg/bg1.jpg">
    <div class="container pbn">
      <div class="section-title">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h6>WE CARE ABOUT PATIENT</h6>
            <h2 class="text-white">OUR OUTSTANDING<span> SERVICES</span></h2>
            <p class="text-white">Sed malesuada nunc sit amet quam hendrerit, mollis vulputate risus tristique. Quisque dapibus eros et dolor accumsan, sit amet interdum tortor imperdiet.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid ptn">
      <div class="row clearfix">
        <div class="carousel-col-5">
          <div class="default-gallery-item item">
            <div class="inner-box"> 
              <!--Image Box-->
              <figure class="image-box"><img src="images/gallery/h1.jpg" alt="" class="img-responsive"></figure>
              <!--Overlay Box-->
              <div class="overlay-box">
                <div class="overlay-inner">
                  <div class="content"> <a href="images/gallery/h1.jpg" class="lightbox-image image-link" title="Image Caption Here"><span class="icon icon-Search"></span></a>
                    <h3>project title</h3>
                    <p>Scaping, renovation</p>
                  </div>
                </div>
              </div>
            </div>
            <!--Default Gallery Item--> 
          </div>
          <div class="default-gallery-item item">
            <div class="inner-box"> 
              <!--Image Box-->
              <figure class="image-box"><img src="images/gallery/h2.jpg" alt="" class="img-responsive"></figure>
              <!--Overlay Box-->
              <div class="overlay-box">
                <div class="overlay-inner">
                  <div class="content"> <a href="images/gallery/h2.jpg" class="lightbox-image image-link" title="Image Caption Here"><span class="icon icon-Search"></span></a>
                    <h3>project title</h3>
                    <p>Scaping, renovation</p>
                  </div>
                </div>
              </div>
            </div>
            <!--Default Gallery Item--> 
          </div>
          <div class="default-gallery-item item">
            <div class="inner-box"> 
              <!--Image Box-->
              <figure class="image-box"><img src="images/gallery/h3.jpg" alt="" class="img-responsive"></figure>
              <!--Overlay Box-->
              <div class="overlay-box">
                <div class="overlay-inner">
                  <div class="content"> <a href="images/gallery/h3.jpg" class="lightbox-image image-link" title="Image Caption Here"><span class="icon icon-Search"></span></a>
                    <h3>project title</h3>
                    <p>Scaping, renovation</p>
                  </div>
                </div>
              </div>
            </div>
            <!--Default Gallery Item--> 
          </div>
          <div class="default-gallery-item item">
            <div class="inner-box"> 
              <!--Image Box-->
              <figure class="image-box"><img src="images/gallery/h4.jpg" alt="" class="img-responsive"></figure>
              <!--Overlay Box-->
              <div class="overlay-box">
                <div class="overlay-inner">
                  <div class="content"> <a href="images/gallery/h4.jpg" class="lightbox-image image-link" title="Image Caption Here"><span class="icon icon-Search"></span></a>
                    <h3>project title</h3>
                    <p>Scaping, renovation</p>
                  </div>
                </div>
              </div>
            </div>
            <!--Default Gallery Item--> 
          </div>
          <div class="default-gallery-item item">
            <div class="inner-box"> 
              <!--Image Box-->
              <figure class="image-box"><img src="images/gallery/h5.jpg" alt="" class="img-responsive"></figure>
              <!--Overlay Box-->
              <div class="overlay-box">
                <div class="overlay-inner">
                  <div class="content"> <a href="images/gallery/h5.jpg" class="lightbox-image image-link" title="Image Caption Here"><span class="icon icon-Search"></span></a>
                    <h3>project title</h3>
                    <p>Scaping, renovation</p>
                  </div>
                </div>
              </div>
            </div>
            <!--Default Gallery Item--> 
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--Blog Section-->
  <section class="blog">
    <div class="container">
      <div class="section-title">
        <div class="row">
          <div class="col-md-4">
            <h6>Latest blog</h6>
            <h2>latest <span> news & blog</span></h2>
          </div>
          <div class="col-md-7">
            <p>Sed malesuada nunc sit amet quam hendrerit, mollis vulputate risus tristique. Quisque dapibus eros et dolor accumsan, sit amet interdum tortor imperdiet.</p>
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-sm-6 col-md-4 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".5s">
            <article class="post clearfix">
              <div class="blog-effect"> <a href="#">
                <figure> <img class="img-responsive" src="images/blog/1.jpg" alt=""></figure>
                </a> </div>
              <div class="post-body">
                <div class="post-info"> <a href="#">Oct 19<sup>th</sup>, 2016 - </a> <a href="#"><span class="icon icon-Message"></span> 10 Comments</a> <a href="#"> - <span class="icon icon-Pen"></span> by Authore</a> </div>
                <h3 class="post-title">What is the success rate of a Root Canel?</h3>
                <a href="blog-single.html" class="btn theme-btn mt10">Read more</a> </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-4 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".5s">
            <article class="post clearfix">
              <div class="blog-effect"> <a href="#">
                <figure> <img class="img-responsive" src="images/blog/2.jpg" alt=""></figure>
                </a> </div>
              <div class="post-body">
                <div class="post-info"> <a href="#">Oct 19<sup>th</sup>, 2016 - </a> <a href="#"><span class="icon icon-Message"></span> 10 Comments</a> <a href="#"> - <span class="icon icon-Pen"></span> by Authore</a> </div>
                <h3 class="post-title">Cosmetic Dentistry Techniques Explained</h3>
                <a href="blog-single.html" class="btn theme-btn mt10">Read more</a> </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-4 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".5s">
            <article class="post clearfix">
              <div class="blog-effect"> <a href="#">
                <figure> <img class="img-responsive" src="images/blog/3.jpg" alt=""></figure>
                </a> </div>
              <div class="post-body">
                <div class="post-info"> <a href="#">Oct 19<sup>th</sup>, 2016 - </a> <a href="#"><span class="icon icon-Message"></span> 10 Comments</a> <a href="#"> - <span class="icon icon-Pen"></span> by Authore</a> </div>
                <h3 class="post-title">Synthetic Glycopolymer Tests Mucoadhesion</h3>
                <a href="blog-single.html" class="btn theme-btn mt10">Read more</a> </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
