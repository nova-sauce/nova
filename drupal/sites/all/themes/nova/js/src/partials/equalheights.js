/*global module*/
/*
  Equalize the article feed's heights
------------------------------- */

module.exports = function() {
  'use strict';

  // function sameHeights(el) {
  //   var selector = el || '[data-key="sameHeights"]',
  //     query = document.querySelectorAll(selector),
  //     elements = query.length,
  //     max = 0,
  //     element;
  //   if ((query) && (elements > 0)) {
  //     while (elements--) {
  //       element = query[elements];
  //       if (element.clientHeight > max) {
  //         max = element.clientHeight;
  //       }
  //     }

  //     elements = query.length;
  //     while (elements--) {
  //       element = query[elements];
  //       element.style.height = max + 'px';
  //     }
  //   }
  // }

  // if ('addEventListener' in window) {
  //   window.addEventListener('resize', function() {
  //     sameHeights();
  //   });

  //   window.addEventListener('load', function() {
  //     sameHeights();
  //   });
  // }
  function heightsEqualizer(el) {
    var selector = el || '[data-key="sameHeights"]',
      elements = document.querySelectorAll(selector),
      maxHeight = 0,
      len = 0,
      i;

    if ((elements) && (elements.length > 0)) {
      len = elements.length;

      for (i = 0; i < len; i++) { // get max height
        elements[i].style.height = ''; // reset height attr
        if (elements[i].clientHeight > maxHeight) {
          maxHeight = elements[i].clientHeight;
        }
      }

      for (i = 0; i < len; i++) { // set max height to all elements
        elements[i].style.height = maxHeight + 'px';
      }
    }
  }

  if (document.addEventListener) {
    document.addEventListener('DOMContentLoaded', function() {
      heightsEqualizer();
    });

    window.addEventListener('resize', function() {
      heightsEqualizer();
    });
  }

  setTimeout(function() { // set 1 second timeout for having all fonts loaded
    heightsEqualizer();
  }, 1000);
};
