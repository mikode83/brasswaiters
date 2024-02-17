const mix = require('laravel-mix');
const fs = require('fs');
const path = require('path');

/**
 *
 * Commands:
 *
 * 		npx mix watch
 *
 * 		npx mix --production
 *
 */

/**
 * setup browser sync (comment out if you dont want it)
 */
mix.browserSync({
	proxy: 'https://brass.tank',
});

/**
 * setup general build/output folder
 */
mix.setPublicPath('./public/');

/**
 * Setup scss files to compile by looping through the styles folder.
 */
let templateStyles = fs.readdirSync('./resources/styles');
for (var i = 0; i < templateStyles.length; i++) {
	if (path.extname(templateStyles[i]) == '.scss') {
		mix.sass('resources/styles/' + templateStyles[i], 'styles').options({
			processCssUrls: false,
			autoprefixer: {
				options: {
					grid: true,
				},
			},
		});
	}
}

/**
 * Setup JS files to compile by looping through the scripts folder.
 */
let templateScripts = fs.readdirSync('./resources/scripts');
for (var i = 0; i < templateScripts.length; i++) {
	if (path.extname(templateScripts[i]) == '.js') {
		mix.js('resources/scripts/' + templateScripts[i], 'scripts');
	}
}

mix.copyDirectory('resources/images', 'public/images');
mix.copyDirectory('resources/fonts', 'public/fonts');

mix.sourceMaps(true, 'source-map');

mix.version();

mix.after(() => {
	let manifest = JSON.parse(fs.readFileSync('./public/mix-manifest.json').toString());

	let manifest2 = {};

	for (let path of Object.keys(manifest)) {
		let newPath = path.replace(/^\//, '');
		manifest2[newPath] = manifest[path].replace(/^\//, '');
	}

	fs.writeFileSync('./public/mix-manifest.json', JSON.stringify(manifest2, null, 2));

	fs.rename('./public/mix-manifest.json', './public/manifest.json', () => {
		console.log('\nFile Renamed!\n');
	});

	let critical_path = './public/styles/critical.css';
	let critical_dest = './resources/views/critical-css.blade.php';

	fs.copyFile(critical_path, critical_dest, (err) => {
		if (err) {
			console.log('Error Found:', err);
		} else {
			console.log('done');
		}
	});
});
