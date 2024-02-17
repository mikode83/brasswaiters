@if ($more_info = get_field('more_info_sections'))
	@foreach ($more_info as $section)
		<section class="section-margin container--1360 more-info" data-aos="fade" data-aos-duration="800">
			<div class="grid grid--2col">
				<div class="content wysiwyg">
					<h2>{{ $section['title'] }}</h2>
					{!! $section['content'] !!}
					@isset($section['link'])
						<a href="{{ $section['link']['url'] }}">{!! $section['link']['title'] !!}</a>
					@endisset
				</div>
				<div class="image">
					<img src="{{ $section['image'] }}" alt="">
				</div>
			</div>
		</section>
	@endforeach
@endif
