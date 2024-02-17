@php
	$testimonials = get_field('testimonials', get_the_ID());
@endphp
<section class="hp-testimonials container--780 section-margin" data-aos="fade" data-aos-duration="800">
	<h2>Reviews</h2>
	<div class="hp-testimonials__slider">
		<div class="swiper testimonial-swiper">
			<div class="swiper-wrapper">
				@foreach ($testimonials as $testimonial_id)
					<div class="swiper-slide">
						<blockquote>

							<p>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M17.5 3A5.5 5.5 0 0 1 23 8.5c0 2.244-1.168 4.414-2.911 4.833-.673.162-1.208 1.025-1.093 2.01.154 1.318 1.346 2.65 3.707 3.7.526.234.306 1.025-.265.953C16.285 19.226 12.02 15.215 12 9.54 12 5.637 14.306 3 17.5 3zm-12 0A5.5 5.5 0 0 1 11 8.5c0 2.244-1.168 4.414-2.911 4.833-.673.162-1.208 1.025-1.093 2.01.154 1.318 1.346 2.65 3.707 3.7.526.234.306 1.025-.265.953C4.285 19.226.02 15.215 0 9.54 0 5.637 2.306 3 5.5 3z" />
								</svg>{!! get_field('testimonial', $testimonial_id) !!}
							</p>
							<cite>{!! get_the_title($testimonial_id) !!}</cite>
						</blockquote>
					</div>
				@endforeach
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>
	<div class="align--center">
		<a href="{{ home_url('/testimonials/') }}" class="btn btn--primary">More Reviews...</a>
	</div>
</section>
