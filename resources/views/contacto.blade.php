@extends('general')
@section('title', Lang::get('seo.contacto.title') )
@section('keywords', Lang::get('seo.contacto.keywords') )
@section('description', Lang::get('seo.contacto.description') )
@section('content')
<section class="overlay overlay-green title_section" data-bg-image="{{ asset('images/section_title/hospital.png') }}" data-stellar-background-ratio="0.0" style="background-position: 50% 0%; background-image: url({{ asset('images/section_title/hospital.png') }}); background-size: cover;">
	<div class="container ">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-title">
					<h2>@lang('contacto.title')</h2>
					<p>@lang('contacto.subtitle')</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contacto cont_info">
	<div class="container">
		<div class="section-content">
			<div class="row">
				<div class="col-md-8">

					<img src=" {{ asset('/images/one_medica.png') }}" />
					<p>@lang('contacto.direccion')</p>
					<div class="comunicacion row">
						<div class="col-md-6">
							<div class="left">
								<span class="icon-phone"></span>
							</div>
							<div class="right">
								<span> CITAS </span>
								<span> 322 223 5521</span>
								<span>Resto del País LADA (01 322)</span>
							</div>
						</div>
						<div class="col-md-6">
							
							<div class="left">
								<span class="icon-movil"></span>
							</div>
							<div class="right">
								<span> URGENCIAS </span>
								<span> 322 150 6291 </span>
								<span> Resto del País LADA (045 322) </span>
							</div>
						</div>
					</div>
					<form class="contact-form" method="post" action="{{ LaravelLocalization::getNonLocalizedURL('contact_form') }}" role="form" novalidate="true">
						{{ csrf_field() }}
						<p>@lang('contacto.paragraph')</p>
						<div class="messages"></div>
						<div class="controls">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="form_name">@lang('contacto.name') *</label>
										<input id="form_name" type="text" name="firstname" class="form-control" placeholder="" required="required" data-error="Name is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="form_lastname">@lang('contacto.lastname') *</label>
										<input id="form_phone" type="text" name="lastname" class="form-control" placeholder="" required="required" data-error="Phone number is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="form_email">@lang('contacto.email') *</label>
										<input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" data-error="Valid email is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div> 
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="form_email">@lang('contacto.information') *</label>
										<div class="form_grp_info">
											<span><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
											<select name="information">
												<optgroup label="@lang('menu.cirugia-gas')">
													<option value="@lang('menu.cirugia-gas') - @lang('menu.cirugia-gas-sub.apendicitis')">@lang('menu.cirugia-gas-sub.apendicitis')</option>
													<option value="@lang('menu.cirugia-gas') - @lang('menu.cirugia-gas-sub.colelitiasis')">@lang('menu.cirugia-gas-sub.colelitiasis')</option>
													<option value="@lang('menu.cirugia-gas') - @lang('menu.cirugia-gas-sub.diverticulitis')">@lang('menu.cirugia-gas-sub.diverticulitis')</option>
													<option value="@lang('menu.cirugia-gas') - @lang('menu.cirugia-gas-sub.hernias')">@lang('menu.cirugia-gas-sub.hernias')</option>
													<option value="@lang('menu.cirugia-gas') - @lang('menu.cirugia-gas-sub.hernias_hiatal')">@lang('menu.cirugia-gas-sub.hernias_hiatal')</option>
												</optgroup>
												<optgroup label="@lang('menu.cirugia-bar')">
													<option value="@lang('menu.cirugia-bar') - @lang('menu.cirugia-bar-sub.manga-gastrica')">@lang('menu.cirugia-bar-sub.manga-gastrica')</option>
													<option value="@lang('menu.cirugia-bar') - @lang('menu.cirugia-bar-sub.bypass')">@lang('menu.cirugia-bar-sub.bypass')</option>
												</optgroup>
											</select>
										</div>
										<div class="help-block with-errors"></div>
									</div>
								</div> 
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="form_message">@lang('contacto.message') *</label>
										<textarea id="form_message" name="message" class="form-control" placeholder="" rows="4" required="" data-error="Please,leave us a message."></textarea>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="text-center col-md-12">
									<input type="submit" class="btn btn-success btn-send disabled" value="@lang('contacto.send')">
									<a href="#"> @lang('contacto.privacy') </a>
								</div>
							</div>
						</div>
					</form> 
				</div>
				<div class="col-md-4 sidebar">
					<h2 class="text-uppercase small-line text">@lang('vallarta.gastroenterologo.title')</h2>
					<p>@lang('vallarta.gastroenterologo.paragraph')</p>
					<ul>
						<li> @lang('vallarta.gastroenterologo.lista.abdominal') </li>
						<li> @lang('vallarta.gastroenterologo.lista.estrenimiento') </li>
						<li> @lang('vallarta.gastroenterologo.lista.vesicula') </li>
						<li> @lang('vallarta.gastroenterologo.lista.hemorroides') </li>
						<li> @lang('vallarta.gastroenterologo.lista.apendicitis') </li>
						<li> @lang('vallarta.gastroenterologo.lista.gastritis') </li>
						<li> @lang('vallarta.gastroenterologo.lista.colitis') </li>
						<li> @lang('vallarta.gastroenterologo.lista.colon') </li>
						<li> @lang('vallarta.gastroenterologo.lista.hernias') </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
