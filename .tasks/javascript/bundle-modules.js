/*
  JavaScript Modules
  ----------------------------------- */

  module.exports = function(paths, gulp, plugins) {

    // Child modules
    var buffer = require('vinyl-buffer'),
      // browserify = require('browserify'),
      source = require('vinyl-source-stream');

    // Get base JavaScript config
    // var settings = plugins.getModule('javascript/config'),
    //  utilities = settings.dependencies,
  //     utility;

    // Default settings
    // settings.browserify = {
    //  alias: [],
    //  debug: true,
    //  external: [],
    //  entries: plugins.path.resolve(paths.src, 'js/src/nova.js'),
    //  paths: [
    //    plugins.path.resolve(paths.src, 'js/src/')
    //  ]
    // };

    // Mark all library includes as external
    // for (utility in utilities) {
    //  settings.browserify.alias.push(utilities[utility] + ':' + utility);
    //  settings.browserify.external.push(utilities[utility]);
    // }

    // Configure
    // var b = browserify(settings.browserify);

    // Mark all library includes as external
    // for (utility in utilities) {
    //  b.external(utility);
    // }

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
