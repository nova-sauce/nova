/*global module*/
/*
	Slick Carousel
------------------------------- */

module.exports = function() {
  'use strict';
  var $ = require('jQuery'),
    slickCarousel = require('slickCarousel');

  $('.carousel').each(function(el) {
    $(this).slick({
      slide: '.carousel__item',
      slidesToShow: 4,
      adaptiveHeight: true,
      responsive: [{
        breakpoint: 1361,
        settings: {
          slidesToShow: 3
        }
      }, {
        breakpoint: 1046,
        settings: {
          slidesToShow: 2
        }
      }, {
        breakpoint: 736,
        settings: {
          slidesToShow: 1
        }
      }]
    });
  });
};
