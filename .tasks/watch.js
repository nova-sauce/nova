/*
	Watch
	----------------------------------- */

	module.exports = function(paths, gulp, plugins) {

		// Return module
		return function() {

			// Source paths
			var pathCSS = plugins.path.resolve(paths.src, 'scss/**/*.scss'),
				pathJS = plugins.path.resolve(paths.src, '**/**/**/*.js'),
				pathFonts = plugins.path.resolve(paths.src, '**/fonts/**'),
				pathImages = plugins.path.resolve(paths.src, 'img/*.{png,jpg,gif}'),
				pathSVG = plugins.path.resolve(paths.src, 'img/svg/*.{svg}'),
				pathHTML = plugins.path.join(paths.src, '**/*.hbs');

      // Destination paths
      var finalCSS = plugins.path.resolve(paths.build, 'css/*'),
        finalImages = plugins.path.resolve(paths.build, 'img/*.{png,jpg,gif}'),
        finalJS = plugins.path.resolve(paths.build, 'js/*');

			// Critical build paths (e.g. rebuild HTML when critical styles change)
			// var pathCriticalCSS = plugins.path.resolve(paths.build, 'css/nova.min.css');

			// Watch for CSS changes
			plugins.watch(pathCSS, plugins.batch(function(events, done) {
				return plugins.runSequence('bundle-css', done);
			}));

			// Watch for JS changes
			plugins.watch(pathJS, plugins.batch(function(events, done) {
				return plugins.runSequence('bundle-modules', done);
			}));

			// Watch for HTML changes
			plugins.watch([pathHTML/*, pathCriticalCSS*/], plugins.batch(function(events, done) {
				return plugins.runSequence('html', done);
			}));

      // Watch for IMG changes
      plugins.watch(pathImages, plugins.batch(function(events, done) {
        return plugins.runSequence('image-optimise', done);
      }));

			// Watch for SVG changes
			plugins.watch(pathSVG, plugins.batch(function(events, done) {
				return plugins.runSequence('image-fallbacks', done);
			}));

			// Watch for static asset changes
			plugins.watch(finalCSS, plugins.batch(function(events, done) {
				return plugins.runSequence(['move-css'], done);
			}));

      plugins.watch(finalJS, plugins.batch(function(events, done) {
        return plugins.runSequence(['move-js'], done);
      }));

      plugins.watch(finalImages, plugins.batch(function(events, done) {
        return plugins.runSequence(['move-img'], done);
      }));
		};
	};
