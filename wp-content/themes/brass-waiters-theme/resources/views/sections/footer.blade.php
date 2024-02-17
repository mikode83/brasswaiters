<footer class="content-info">
	<div class="container--780 align--center">
		<a href="{{ home_url() }}" title="{{ bloginfo('name') }}" class="identity">
			@include('SVG::logo')
		</a>
		@if (has_nav_menu('primary_navigation'))
			{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu', 'echo' => false]) !!}
		@endif
		<p>
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
		</p>
		<p>
			&copy; Brass Waiters {{ date('Y') }}.
		</p>
		<p>
			<small>Site by <a href="https://mikegarlick.dev">Mike Garlick</a></small>
		</p>
	</div>
</footer>
