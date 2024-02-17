<section class="hp-gallary section-margin" data-aos="fade" data-aos-duration="800">
	<div class="swiper mini-gallery">
		<div class="swiper-wrapper">
			@foreach (get_field('homepage_gallery') as $gallery_item)
				<div class="swiper-slide">
					@if ($gallery_item['type'] == 'image')
						<img src="{{ $gallery_item['url'] }}" alt="{{ $gallery_item['alt'] }}">
					@endif
				</div>
			@endforeach
		</div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
	<div class="align--center">
		<a href="{{ home_url('/gallery/') }}" class="btn">View Full Gallery</a>
	</div>
</section>
