/*global module*/
/*
  Resize events
------------------------------- */

module.exports = function() {
  'use strict';

  var $lastWidth = $(window).width(),
    vpWidth = viewport().width;

  function viewport() {
    var ee = window, aa = 'inner';
    if (!('innerWidth' in window)) {
      aa = 'client';
      ee = document.documentElement || document.body;
    }
    return {width: ee[aa + 'Width'], height: ee[aa + 'Height']};
  }

  function resizeFunctions() {
    vpWidth = viewport().width;
    if (vpWidth > 765) {
    }
  }

  function windowResize() {
    if ($(window).width() !== $lastWidth) {
      resizeFunctions();
      $lastWidth = $(window).width();
    }
  }

  $(window).on('resize', windowResize);
};
