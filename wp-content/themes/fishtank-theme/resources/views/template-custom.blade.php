{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
	@while (have_posts())
		@php(the_post())
		@include('sections.content')
	@endwhile
@endsection
