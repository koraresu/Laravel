<section class="team hidden-md hidden-lg">
	<div class="container ptn">
		<div class="section-title">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-uppercase small-line text">{!! $title !!}</h2>
				</div>
			</div>
		</div>
		<div class="section_wrap">
			<div class="row">
				<div class="carousel-col-3">
					@foreach($certificates as $certificate)
					<div class="team-item item">
						<div class="team-img" style="height:100%;">
							<a href="#" style="height:100%;">
								<span style="height: 100%;width: 0;display:inline-block;"></span>
								<img style="display:inline-block;vertical-align:center;" class="img-fullwidth img-responsive" src="{{ url($path . $fn($certificate) ) }}" alt="">
							</a>
						</div>
					</div>
					@endforeach



				</div>
			</div>
		</div>
	</div>
</section>