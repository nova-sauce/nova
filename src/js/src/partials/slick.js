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
      adaptiveHeight: true
    });
  });
};
