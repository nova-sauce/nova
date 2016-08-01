/*
	CSS Config
	----------------------------------- */

	module.exports = function(paths, gulp, plugins) {

		// Return bundles
		return {

			// Starter style bundle
			starter: {

				// Sass partials
				partials: [
					plugins.path.resolve(paths.src, 'scss/starter.scss'),
				]
			},

			// Main style bundle
			main: {

				// Sass partials
				partials: [
					plugins.path.resolve(paths.src, 'scss/main.scss'),
				]
			},

			// Legacy style bundle
			nova: {

				// Sass partials
				partials: [
					plugins.path.resolve(paths.src, 'scss/nova.scss'),
				]
			}
		};
	};
