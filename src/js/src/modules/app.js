/*global module*/
module.exports = function App() {
  'use strict';

  var self = this;

  // Dependencies
  var loadCSS = require('loadCSS'),
    onloadCSS = require('onloadCSS'),
    loadJS = require('loadJS');

  /*
    External methods
  ----------------------------------- */

  self.init = function() {
    // Other modules
    if (document.querySelectorAll('.carousel').length) {
      new (require('partials/slick'))();
    }
    new (require('partials/bindevents'))();
  };

  self.init();

  // Return instance
  return self;
};
