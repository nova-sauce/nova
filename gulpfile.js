/*
  Dependencies
  ----------------------------------- */

  // Gulp + plugins
  var gulp = require('gulp'),
    plugins = require('gulp-load-plugins')();

  // Non-gulp modules
  plugins.path = require('path');
  plugins.browserSync = require('browser-sync'),
  plugins.runSequence = require('run-sequence');
  plugins.eventStream = require('event-stream');

  // Fetch config
  var config = require('./package.json').config;


/*
  Child tasks
  ----------------------------------- */

  plugins.getModule = function(task) {
    return require(plugins.path.resolve(config.paths.tasks, task))(config.paths, gulp, plugins);
  }

  gulp.task('clean', plugins.getModule('clean'));
  gulp.task('copy', plugins.getModule('copy'));
  gulp.task('move-css', plugins.getModule('move/css'));
  gulp.task('move-js', plugins.getModule('move/js'));
  gulp.task('move-img', plugins.getModule('move/img'));
  gulp.task('bundle-css', plugins.getModule('css/bundle'));
  gulp.task('lint-modules', plugins.getModule('javascript/lint'));
  gulp.task('bundle-libs', plugins.getModule('javascript/bundle-libs'));
  gulp.task('bundle-modules', plugins.getModule('javascript/bundle-modules'));
  gulp.task('html', plugins.getModule('html/html'));
  gulp.task('image-fallbacks', plugins.getModule('images/fallbacks'));
  gulp.task('image-optimise', plugins.getModule('images/optimise'));
  gulp.task('watch', plugins.getModule('watch'));
  gulp.task('browser-sync', plugins.getModule('browser-sync'));


/*
  Main tasks
  ----------------------------------- */

  // Shared build tasks
  gulp.task('build', ['clean'], function(callback) {
    plugins.runSequence('lint-modules', ['bundle-css', 'bundle-libs', 'bundle-modules'], ['image-optimise', 'image-fallbacks', 'html'], 'move-css', 'move-js', 'move-img', callback);
  });

  // Default tasks
  gulp.task('default', ['clean'], function(callback) {
    plugins.runSequence('build', 'copy', 'move-css', 'move-js', 'move-img', callback);
  });

  // Development tasks
  gulp.task('dev', ['clean'], function(callback) {
    plugins.runSequence('build', ['watch', 'browser-sync'], callback);
  });

  // Live tasks
  gulp.task('live', ['default'], function(callback) {
    gulp.start('image-optimise', callback);
  });
