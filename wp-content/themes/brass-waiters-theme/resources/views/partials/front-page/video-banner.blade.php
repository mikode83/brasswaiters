<section class="video-banner section-margin">
	<div class="video-banner__vid-wrap">
		<video muted="" loop="" poster="{{ get_field('intro_image') }}">
			<source src="https://evolutiondinghyropes.co.uk/app/uploads/2022/04/Evo-Dinghy-Hero-Video-1.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
	</div>

	<!-- Video Modal -->
	{{-- <div id="myModal" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<span id="videoClose" class="close">×</span>
			<iframe id="modalVideo" frameborder="0" allow="autoplay"></iframe>
		</div>

	</div>

	<div class="hero_overlay"></div>
	<div class="hero-border"></div> --}}

	<div class="video-banner__content container--780">
		<h1>
			<span class="sr-only">Brass Waiters</span>
			@include('SVG::logo')
		</h1>
		<h2>
			Welcome to the <em>original</em> <span>Brass Waiters</span>: Your Musical Surprise Delight!
		</h2>
		{{-- <div class="hero-play__link" id="videoBtn" data-src="https://player.vimeo.com/video/691308159?h=1af8e711c8%22&amp;badge=0">
			<svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
				<path d="M35,0A35,35,0,1,0,70,35,35.014,35.014,0,0,0,35,0Z" fill="none"></path>
				<path d="M33.205-1A34.214,34.214,0,0,1,46.523,64.723,34.216,34.216,0,0,1,19.887,1.687,34.017,34.017,0,0,1,33.205-1Zm0,66.41A32.205,32.205,0,1,0,1,33.205,32.242,32.242,0,0,0,33.205,65.41Z" transform="translate(1.795 1.795)" fill="#222"></path>
				<path d="M0,0V24L20,12Z" transform="translate(28.59 23)" fill="#222"></path>
			</svg> Watch the full video
		</div> --}}
	</div>
</section>
