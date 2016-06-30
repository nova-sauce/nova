/*
  JavaScript Config
  ----------------------------------- */

  module.exports = function(paths, gulp, plugins) {

    // Return configuration
    return {

      // CommonJS modules
      modules: [
        // plugins.path.join(paths.src, 'js/src/modules/*.js'),
        // plugins.path.join(paths.src, 'js/src/partials/*.js'),
        plugins.path.join(paths.src, 'js/src/nova.js')
      ],

      // External libraries etc
      dependencies: {
        jQuery: plugins.path.resolve('node_modules/jquery/dist/jquery'),
        // loadJS: plugins.path.resolve('node_modules/fg-loadjs/loadJS'),
        // loadCSS: plugins.path.resolve('node_modules/fg-loadcss/src/loadCSS'),
        // onloadCSS: plugins.path.resolve('node_modules/fg-loadcss/src/onloadCSS'),
        slickCarousel: plugins.path.resolve('node_modules/slick-carousel/slick/slick')
      }
    };
  };
