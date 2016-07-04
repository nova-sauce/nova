/*
	JavaScript Libraries
	----------------------------------- */

	module.exports = function(paths, gulp, plugins) {

		// Child modules
		var buffer = require('vinyl-buffer');

		// Return module
		return function() {
      return gulp.src(['node_modules/jquery/dist/jquery.min.js', 'node_modules/slick-carousel/slick/slick.min.js'])
        .pipe(plugins.plumber())

        // Load files
			  .pipe(buffer())

        // Start sourcemaps, concat and switch to build location
        .pipe(plugins.sourcemaps.init())
        .pipe(plugins.concat('libs.min.js', {newLine: '\n\n;\n\n'}))

				// Write to files
        .pipe(plugins.sourcemaps.write('.'))
				.pipe(gulp.dest(plugins.path.resolve(paths.build, 'js')))

				// Filter out sourcemaps, reload in browser
				.pipe(plugins.filter('**/*.js'))
				.pipe(plugins.browserSync.reload({stream: true}));
		};
	};
