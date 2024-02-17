<section class="hp-intro container--1360 section-margin">
	<div class="grid grid--2col">
		<div class="content" data-aos="fade" data-aos-duration="800">
			<h2>{!! get_field('intro_title') !!}</h2>
			{!! get_field('intro_text') !!}
			<a href="{{ home_url('/contact-us/') }}" class="btn">Contact Us</a>
		</div>
		<div class="image" data-aos="fade" data-aos-duration="800">
			<img src="{{ get_field('intro_image') }}" alt="{!! get_field('intro_title') !!}">
		</div>
	</div>
</section>
