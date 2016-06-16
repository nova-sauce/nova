/*
	HTML
	----------------------------------- */

	module.exports = function(paths, gulp, plugins) {
		// Child modules
		var assemble = require('assemble'),
			app = assemble();

		// Add helpers
		app.helper('outputFileContent', plugins.getModule('html/helpers/outputFileContent'));

		// Return module
		return function() {

			// Default page options
			var options = {
				name: 'default',
				locale: 'en-GB',

				// Appended to includes to bust cache
				timestamp: Date.now()
			};

      app.data({foo: 'bar'});
      app.data(plugins.path.resolve(paths.src, 'hbs/data/*.{json,yml}'));

			// Find layouts and partials
			app.layouts(plugins.path.resolve(paths.src, 'hbs/layouts/*.hbs'));
			app.partials(plugins.path.resolve(paths.src, 'hbs/partials/*.hbs'));

			// Add classic helpers
			app.helpers(require('handlebars-helpers')(), app.helpers);

			// Build templates
			return app.src(plugins.path.resolve(paths.src, 'hbs/*.hbs'))
				.pipe(app.renderFile(options))
				.pipe(plugins.rename({extname: '.html'}))
        .pipe(plugins.prettify({indent_size: 2}))
				.pipe(app.dest(paths.build))
				.pipe(plugins.browserSync.reload({stream: true}));
		};
	};
