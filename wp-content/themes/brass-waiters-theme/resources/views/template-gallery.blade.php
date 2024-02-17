{{--
  Template Name: Custom Gallery
--}}

@extends('layouts.app')

@section('content')

	@while (have_posts())
		@php the_post() @endphp
		<header class="page-header section-margin" style="background-image: url({{ get_the_post_thumbnail_url(get_the_ID(), 'full') }});">
			<div class="container--1360">
				<h1>Gallery</h1>
			</div>
		</header>
		<section class="section-margin">
			<div class="container--1360">
				<h2>Video Gallery</h2>
				<iframe class="yt-playlist" src="https://www.youtube.com/embed/videoseries?si=8VCY715XEoi3FijC&amp;list=PLBgIWwYTYafL7Z2PpUnpnVZKO5HC3Iw5f" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			</div>
		</section>
		<section class="section-margin">
			<div class="container--1360">
				<h2>Image Gallery</h2>
				<div class="grid grid--4col" id="gallery">
					@if ($images = get_field('images'))
						@foreach ($images as $image)
							<div>
								<a href="{{ $image['url'] }}">
									<img src="{{ $image['sizes']['thumbnail'] }}" />
								</a>
							</div>
						@endforeach
					@endif
				</div>
		</section>
	@endwhile
@endsection
