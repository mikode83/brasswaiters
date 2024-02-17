<!doctype html>
<html <?php language_attributes();?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
	<?php if (\View::exists('critical-css')) {
		echo \Roots\view('critical-css')->render();
	}

	?>
	</style>
	<?php wp_head();?>
	<?php if( WP_ENV == 'production' ) : ?>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-HSSND19TJJ"></script>
	<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', 'G-HSSND19TJJ');
	</script>

	<?php endif; ?>
	<script src="https://kit.fontawesome.com/dde1fd530c.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class();?>>
	<?php wp_body_open();?>
	<?php do_action('get_header');?>

	<div id="app">
		<?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
	</div>

	<?php do_action('get_footer');?>
	<?php wp_footer();?>
</body>

</html>