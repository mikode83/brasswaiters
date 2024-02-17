{{--
  Template Name: Contact Us
--}}

@extends('layouts.app')

@section('content')
	@while (have_posts())
		@php the_post() @endphp
		<header class="page-header section-margin" style="background-image: url({{ get_the_post_thumbnail_url(get_the_ID(), 'full') }});">
			<div class="container--1360">
				<h1>Contact Us</h1>
			</div>
		</header>

		<section class="section-margin">
			<div class="container--780">
				{!! do_shortcode('[gravityform id="2" title="true"]') !!}
			</div>
		</section>
	@endwhile
@endsection
