/*
  JavaScript Modules
  ----------------------------------- */

  module.exports = function(paths, gulp, plugins) {

    // Child modules
    var buffer = require('vinyl-buffer');

    // Return module
    return function() {
      return gulp.src(plugins.path.resolve(paths.src, 'js/src/*.js'))
        .pipe(plugins.plumber())

        // Load files
        .pipe(buffer())

        // Start sourcemaps, uglify and switch to build location
        .pipe(plugins.sourcemaps.init())
        .pipe(plugins.babel({presets: ['es2015']}))
        .pipe(plugins.uglify())
        .pipe(plugins.concat('nova.min.js'))

        // Write to files
        .pipe(plugins.sourcemaps.write('.', {sourceRoot: '/js/src'}))
        .pipe(gulp.dest(plugins.path.join(paths.build, 'js')))

        // Filter out sourcemaps, reload in browser
        .pipe(plugins.filter('**/*.js'))
        .pipe(plugins.browserSync.reload({stream: true}));
    };
  };
