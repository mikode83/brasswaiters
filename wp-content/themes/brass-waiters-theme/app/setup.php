<?php

/**
 * Theme setup.
 */

namespace App;

/**
 * Only use custom blocks made by us
 *
 * feel free to edit for different post stypes etc...
 */

function mix_manifest($asset)
{
	$_mix_manifest = file_get_contents(__DIR__ . '/../public/manifest.json');
	$mix_manifest = json_decode($_mix_manifest);
	if (property_exists($mix_manifest, $asset)) {
		return get_template_directory_uri() . '/public/' . $mix_manifest->{$asset};
	} else {
		return get_template_directory_uri() . '/public/' . $asset;
	}
}

/**
 * Register/Enqueue the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('sage/main.css', mix_manifest('styles/main.css'), false, null);
	wp_enqueue_script('sage/main.js', mix_manifest('scripts/main.js'), null, null, true);
}, 100);

/**
 * ACF Block Render Callback Function
 *
 * This is called from the block.json
 */

function acf_block_render_callback($block)
{
	// wp_enqueue_style($block['name']);
	// creat a slug from the blockname
	$slug = str_replace('fishtank/', '', $block['name']);
	// add the slug to the classes for the block
	$classes = [$slug];
	// If the ancor is set in the CMS us that as ID else use teh ACF created one
	$id = !empty($block['anchor']) ? $block['anchor'] : $block['id'];
	// If a class or classes are added via the CMS append that to array of classes
	if (!empty($block['className'])) {
		$classes[] = $block['className'];
	}
	// add class if is preview
	if (is_preview()) {
		$classes[] = 'is_preview';
	}

	$block['classes'] = implode(' ', $classes);
	// if the view exists then render it and pass the IS, Classes and ACF Block data.
	if (\View::exists("blocks/${slug}/${slug}")) {
		echo \Roots\view("blocks/${slug}/${slug}", ['block' => $block])->render();
	} else {
		// fallback
		echo 'No view file exists';
	}
}

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
	/**
	 * Enable features from the Soil plugin if activated.
	 *
	 * @link https://roots.io/plugins/soil/
	 */
	add_theme_support('soil', [
		'clean-up',
		'nav-walker',
		'nice-search',
		'relative-urls',
	]);

	/**
	 * Disable full-site editing support.
	 *
	 * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
	 */
	remove_theme_support('block-templates');

	/**
	 * Register the navigation menus.
	 *
	 * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
	 */
	register_nav_menus([
		'primary_navigation' => __('Primary Navigation', 'sage'),
	]);

	/**
	 * Disable the default block patterns.
	 *
	 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
	 */
	remove_theme_support('core-block-patterns');

	/**
	 * Enable plugins to manage the document title.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
	 */
	add_theme_support('title-tag');

	/**
	 * Enable post thumbnail support.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	/**
	 * Enable responsive embed support.
	 *
	 * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content
	 */
	add_theme_support('responsive-embeds');

	remove_theme_support('widgets-block-editor');

	/**
	 * Enable HTML5 markup support.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
	 */
	add_theme_support('html5', [
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
		'script',
		'style',
	]);

	/**
	 * Enable selective refresh for widgets in customizer.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#customize-selective-refresh-widgets
	 */
	add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
	$config = [
		'before_widget' => '<section class="widget %1$s %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	];

	register_sidebar([
		'name' => __('Primary', 'sage'),
		'id' => 'sidebar-primary',
	] + $config);

	register_sidebar([
		'name' => __('Footer', 'sage'),
		'id' => 'sidebar-footer',
	] + $config);
});
