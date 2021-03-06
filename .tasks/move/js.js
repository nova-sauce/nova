/*
  Move
  ----------------------------------- */

  module.exports = function(paths, gulp, plugins) {
    // Return module
    return function(callback) {
      return gulp.src('dist/js/**/*', {dot: true})
        .pipe(plugins.newer(paths.build))
        .pipe(gulp.dest(plugins.path.join(paths.drupal, 'js')));
    };
  };
