<nav id="nav">
	<div class="container--1360 inner">
		<a href="{{ home_url() }}" title="{{ bloginfo('name') }}" class="identity">
			@include('SVG::logo')
		</a>
		<div class="links">
			@if (has_nav_menu('primary_navigation'))
				{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu', 'echo' => false]) !!}
			@endif
			<a href="https://www.facebook.com/profile.php?id=100094605966990" class="social" target="_blank">
				<i class="fa-brands fa-facebook-f"></i>
			</a>
			<a href="https://instagram.com/brass_waiters" class="social" target="_blank">
				<i class="fa-brands fa-instagram"></i>
			</a>
			<a href="https://www.tiktok.com/@brass.waiters" class="social" target="_blank">
				<i class="fa-brands fa-tiktok"></i>
			</a>
			<a href="https://www.youtube.com/@BrassWaiters" class="social" target="_blank">
				<i class="fa-brands fa-youtube"></i>
			</a>
		</div>
		{{-- <div class="bottom">
			<a href="#contact" title="Contact" class="contact">
				<strong>Contact Us</strong>
			</a>
		</div> --}}

	</div>

	</div>
</nav>
