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
                El Dr. Sergio del Hoyo cirujano gastrointestinal (gastroenterólogo) con adiestramiento en laparoscopia (cirugía de mínima invasión), cirugía de obesidad y enfermedades metabólicas (cirugía para la obesidad). Cuenta con 15 años de experiencia en cirugía Gastrointestinal y enfermedades gastrointestinales y más de 7 años en cirugía para la obesidad (Manga gástrica y Bypass gástrico).
              </p>
            </div>
            <div class="col-md-6">
              <div class="home_team_med">
                <span class="icon-invoice"></span>
                <h4>Equipo Médico Certificado</h4>
                <p>
                  Somos un equipo conformado por especialistas en Gastroenterología, Cirugía Gastrointestinal, Anestesiología, Medicina interna, Terapia intensiva, Psicología y Nutrición. Disponibles siempre a ayudarle en todo momento que usted lo requiera. Bilingües en los idiomas español e inglés.
                </p>
                <a href=""> Conozca Más </a>
              </div>


            </div>
            <div class="col-md-6">
              <div class="home_care">
                <span class="icon-care"></span>
                <h4>Ética, responsabilidad, preparación y actualización constante</h4>
                <p>
                  Brindamos siempre atención médica de calidad y seguridad a todos nuestros pacientes. Somos un equipo médico CERTIFICADO en nuestra especialidad lo que traduce certeza y confianza en nuestra atención médica haciendo diagnósticos y tratamientos especializados.
                </p>
                <p>
                  Dr. Sergio del Hoyo y su Equipo acuden año con año a diversos cursos y congresos nacionales e internacionales.
                </p>
              </div>
            </div>

          </div>
          <div class="col-md-3 wow fadeInRight animated">
            <div>
              <h3 class="text-uppercase small-line mb20">Atención médica <span>las 24 hrs.</span></h3>
              <p>
                Disponibles los 7 días de la semana
                Atención especialidaza en consulta programada Lunes a Sábado de 9 a 20 hrs.
              </p>
            </div>
            <div>
              <h3 class="text-uppercase small-line mb20">Urgencias</h3>
              <p>
                Las 24 horas del día con atención en los mejores hospitales de Puerto Vallarta y Nuevo Vallarta.
              </p>
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

              <h3 class="text-uppercase small-line mb20">CALCULADORA <span>IMC</span></h3>
              <p>
                Conozca su Índice de Masa Corporal, ingrese su estatura en cms y peso en Kg
              </p>
            </div>
            <div class="imc-form col-md-4 col-sm-6 col-xs-12">
              <div class="col-md-12">
                <div class="metrico col-md-4">
                  <input type="radio" name="imc-type" /> Métrico
                </div>
                <div class="imperial col-md-4">
                  <input type="radio" name="imc-type" /> Imperial
                </div>
              </div>

              <div class="col-md-12">
                <div class="altura col-md-6">
                  <label>
                    Altura
                    <input type="text" />
                  </label>
                </div>
                <div class="peso col-md-6">
                  <label>
                    Peso
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
              <div class="imc-de"> Tu IMC es de:</div>
              <div class="imc-res"> 20.5 </div>
              <div class="imc-range"> 18.5 a 20 </div>
              <div class="imc-desc"> Desorden alimenticio </div>
            </div>
          </div>
      </div>
    </div>
  </section>
  <section class="miembro">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <h3 class="col-md-12">El Dr. Sergio del Hoyo es miembro de:</h3>
            <div class="rasoc col-md-3">
              <img src="{{ asset('images/asoc/asociacion-mexicana-de-cirugia-general.png') }}" />
              <span> Asociación Mexicana de Cirugía General </span>
            </div>
            <div class="rasoc col-md-3">
              <img src="{{ asset('images/asoc/asociacion-mexicana-de-cirugia-endoscopica-ac.png') }}" />
              <span> Asociación Mexicana de Cirugía Endoscópica, A.C. </span>
            </div>
            <div class="rasoc col-md-3">
              <img src="{{ asset('images/asoc/asociacion-mexicana-de-cirugia-general-2.png') }}" />
              <span> Asociación Mexicana de Cirugía General</span>
            </div>
            <div class="rasoc col-md-3">
              <img src="{{ asset('images/asoc/consejo-mexicano-de-cirugia-general-ac.png') }}" />
              <span> Consejo Mexicano de Cirugía General, A.C. </span>
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection
