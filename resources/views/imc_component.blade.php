<div class="container">
		<div class="section-content">
			<div class="row">
				<div class="imc-message col-md-3 col-sm-6 col-xs-12">

					<h3 class="text-uppercase small-line mb20">@lang('home.imc.title')</h3>
					@lang('home.imc.desc')
				</div>
				<div class="imc-form col-md-5 col-sm-12 col-xs-12">
					<div class="col-md-12">
						<div class="metrico col-md-6 col-sm-6  col-xs-6">
							<label class="radio_button">
								<div class="radio_cont">
									<input type="radio" name="imc-type" value="metrico" checked="checked" /> 
									<div class="control_indicator"></div>
								</div>
								<span> @lang('home.imc.metrico') </span>
							</label>
						</div>
						<div class="metrico col-md-6 col-sm-6  col-xs-6">
							<label class="radio_button">
								<div class="radio_cont">
									
										<input type="radio" name="imc-type" value="imperial" />
										<div class="control_indicator"></div>
								</div>
								<span> @lang('home.imc.imperial') </span>
							</label>
						</div>
					</div>

					<div class="col-md-12">
						<div class="altura col-md-6 col-sm-6  col-xs-6">
							<label>
								@lang('home.imc.altura.title')
								<input type="text" id="imc_altura" data-metric="@lang('home.imc.altura.metric')" data-imperial="@lang('home.imc.altura.imperial')" placeholder="@lang('home.imc.altura.metric')" />
							</label>
						</div>
						<div class="peso col-md-6 col-sm-6  col-xs-6">
							<label>
								@lang('home.imc.peso.title')
								<input type="text" id="imc_peso" data-metric="@lang('home.imc.peso.metric')" data-imperial="@lang('home.imc.peso.imperial')"  placeholder="@lang('home.imc.peso.metric')" />
							</label>
						</div>
					</div>

					<div class="botones col-md-12">
						<div class="borrar col-md-6 col-sm-6  col-xs-6">
							<input type="reset" value="Borrar" />
						</div>
						<div class="calcular col-md-6 col-sm-6  col-xs-6">
							<input type="button" value="Calcular" />
						</div>
					</div>


				</div>
				<div class="imc-resultado col-md-4 col-sm-6 col-xs-12">
					<div class="imc-de"> @lang('home.imc.tu-imc')</div>
					<div class="imc-res" id="imc_res">  </div>
					<ul>

						<li class="imc-description" data-min="20" data-max="25">
							<div class="imc-range"> @lang('imc.no_requiere_range') </div>
							<div class="imc-desc" id="imc_desc"> @lang('imc.no_requiere_message') </div>
						</li>

						<li class="imc-description" data-min="25.1" data-max="29.9">
							<div class="imc-range"> @lang('imc.posible_range') </div>
							<div class="imc-desc" id="imc_desc"> @lang('imc.posible_message') </div>
						</li>

						<li class="imc-description" data-min="30" data-max="35">
							<div class="imc-range"> @lang('imc.necesita_one_range') </div>
							<div class="imc-desc" id="imc_desc"> @lang('imc.necesita_one_message') </div>
						</li>

						<li class="imc-description" data-min="35.1" data-max="40">
							<div class="imc-range"> @lang('imc.necesita_two_range') </div>
							<div class="imc-desc" id="imc_desc"> @lang('imc.necesita_two_message') </div>
						</li>

						<li class="imc-description" data-min="40.1" data-max="50">
							<div class="imc-range"> @lang('imc.necesita_three_range') </div>
							<div class="imc-desc" id="imc_desc"> @lang('imc.necesita_three_message') </div>
						</li>

						<li class="imc-description" data-min="50.1" data-max="60">
							<div class="imc-range"> @lang('imc.super_range') </div>
							<div class="imc-desc" id="imc_desc"> @lang('imc.super_message') </div>
						</li>

						<li class="imc-description" data-min="60.1" data-max="100">
							<div class="imc-range"> @lang('imc.supersuper_range') </div>
							<div class="imc-desc" id="imc_desc"> @lang('imc.supersuper_message') </div>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</div>
