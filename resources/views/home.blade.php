@extends('general')

@section('title', 'Page Title')

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
      <div class="slide"> <img src="images/slider/group-4.png" alt>
        <div class="title"> <span>NUESTRAS CIRUGÍAS SON REALIZADAS CON</span>
          <h1>LAPAROSCOPÍA</h1>
          <a href="#" class="btn theme-btn">Buy Now</a> </div>
      </div>
      <div class="slide"> <img src="images/slider/group-4.png" alt>
        <div class="title"> <span>NUESTRAS CIRUGÍAS SON REALIZADAS CON</span>
          <h1>LAPAROSCOPÍA</h1>
          <a href="#" class="btn theme-btn"></a> </div>
      </div>
      
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
          <div class="col-md-9 wow fadeInLeft animated">
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
          <div class="col-md-3 wow fadeInRight animated">
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
            <div class="imc-message col-md-4 col-sm-6 col-xs-12">

              <h3 class="text-uppercase small-line mb20">@lang('home.imc')</h3>
              @lang('home.imc-desc')
            </div>
            <div class="imc-form col-md-4 col-sm-6 col-xs-12">
              <div class="col-md-12">
                <div class="metrico col-md-4">
                  <input type="radio" name="imc-type" /> @lang('home.metrico')
                </div>
                <div class="imperial col-md-4">
                  <input type="radio" name="imc-type" /> @lang('home.imperial')
                </div>
              </div>

              <div class="col-md-12">
                <div class="altura col-md-6">
                  <label>
                    @lang('home.altura')
                    <input type="text" />
                  </label>
                </div>
                <div class="peso col-md-6">
                  <label>
                    @lang('home.peso')
                    <input type="text" />
                  </label>
                </div>
              </div>

              <div class="col-md-12">
                <div class="borrar col-md-6">
                  <input type="button" value="Borrar" />
                </div>
                <div class="calcular col-md-6">
                  <input type="button" value="Calcular" />
                </div>
              </div>


            </div>
            <div class="imc-resultado col-md-4 col-sm-6 col-xs-12">
              <div class="imc-de"> @lang('home.tu-imc')</div>
              <div class="imc-res"> @lang('home.tu-imc-res') </div>
              <div class="imc-range"> @lang('home.tu-imc-range') </div>
              <div class="imc-desc"> @lang('home.tu-imc-desc') </div>
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
            <div class="rasoc col-md-3">
              <img src="{{ asset('images/asoc/asociacion-mexicana-de-cirugia-general.png') }}" />
              <span> @lang('home.es-miembro-asoc-mex') </span>
            </div>
            <div class="rasoc col-md-3">
              <img src="{{ asset('images/asoc/asociacion-mexicana-de-cirugia-endoscopica-ac.png') }}" />
              <span> @lang('home.es-miembro-asoc-end') </span>
            </div>
            <div class="rasoc col-md-3">
              <img src="{{ asset('images/asoc/asociacion-mexicana-de-cirugia-general-2.png') }}" />
              <span> @lang('home.es-miembro-asoc-mex1') </span>
            </div>
            <div class="rasoc col-md-3">
              <img src="{{ asset('images/asoc/consejo-mexicano-de-cirugia-general-ac.png') }}" />
              <span> @lang('home.es-miembro-asoc-cir') </span>
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection
