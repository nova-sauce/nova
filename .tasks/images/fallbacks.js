/*
	Generate PNG fallbacks for SVGs
	----------------------------------- */

	module.exports = function(paths, gulp, plugins) {

		// Return module
		return function() {

			return gulp.src(plugins.path.resolve(paths.src, 'img/svg/*.{svg}'))
				.pipe(plugins.svg2png())
				.pipe(gulp.dest(plugins.path.join(paths.build, 'img')))
				.pipe(plugins.browserSync.reload({stream: true}));
		};
	};
