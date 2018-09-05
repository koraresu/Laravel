<section class="gallery hidden-xs hidden-sm">
	<div class="container">
		<div class="section-title">
			<h2 class="text-uppercase small-line text">{!! $title !!}</h2>
		</div>
		<div class="section-content">
			<div class="row">

				@foreach($certificates as $certificate)
				<div class="col-md-3">
					<a href="{{ url($path . $fn($certificate) ) }}" class="popup-link" title="">
						<img src="{{ url($path . $fn($certificate) ) }}" />
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>