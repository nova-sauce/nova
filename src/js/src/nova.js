/*globals window, document, setTimeout*/
(function($) {
  /**
   * jQuery function to prevent default anchor event and take the href * and the title to make a share pupup
   *
   * @param  {[object]} e           [Mouse event]
   * @param  {[integer]} intWidth   [Popup width defalut 500]
   * @param  {[integer]} intHeight  [Popup height defalut 400]
   * @param  {[boolean]} blnResize  [Is popup resizeabel default true]
   */
  $.fn.customerPopup = function(e, intWidth, intHeight, blnResize) {
    // Prevent default anchor event
    e.preventDefault();

    // Set values for window
    let $intWidth = intWidth || '500',
      $intHeight = intHeight || '400',
      strResize = (blnResize ? 'yes' : 'no');

    // Set title and open popup with focus on it
    var strTitle = ((typeof this.attr('title') !== 'undefined') ? this.attr('title') : 'Social Share'),
      strParam = 'width=' + $intWidth + ',height=' + $intHeight + ',resizable=' + strResize,
      objWindow = window.open(this.attr('href'), strTitle, strParam).focus();
  };

  /* ================================================== */

  $(document).ready(function($) {
    $('.feed .list--social li a').on('click', function(e) {
      $(this).customerPopup(e);
    });
    $('.hero__social-link a').on('click', function(e) {
      $(this).customerPopup(e);
    });
  });
}(jQuery));
(($, NS) => {
  'use strict';
  let $this,
    feedContent = '.feed__article__content',
    detailContent = '.feed__article__details__content',
    activeDetailClass = 'feed__article__details__content--active',
    activeButtonClass = 'buttons__button--active',
    settings = {
      lastWidth: $(window).width(),
      vpWidth: 0
    },
    $el = {
      feed: {
        articleButtonsTrigger: $('.feed__article__content__social .buttons__button'),
        detail: $('.feed__article__details__content'),
        socialDetail: $('.feed__article__details__content--social'),
        tagsDetail: $('.feed__article__details__content--tags')
      },
      globalNav: {
        headerTrigger: $('.header__nav-controls__control .icon')
      }
    },

    viewport = () => {
      var ee = window, aa = 'inner';
      if (!('innerWidth' in window)) {
        aa = 'client';
        ee = document.documentElement || document.body;
      }

      return {width: ee[aa + 'Width'], height: ee[aa + 'Height']};
    },

    heightsEqualizer = (el) => {
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
    },

    resizeFunctions = () => {
      settings.vpWidth = viewport().width;
      if (settings.vpWidth >= 796) {
        heightsEqualizer();
      } else {
        $('[data-key="sameHeights"]').css('height', 'auto');
      }
    },

    windowResize = () => {
      if ($(window).width() !== settings.lastWidth) {
        resizeFunctions();
        settings.lastWidth = $(window).width();
      }
    },

    bindEvents = () => {
      settings.vpWidth = viewport().width;
      $el.globalNav.headerTrigger.on('click', (el) => {
        $this = $(el.target).parent();
        if ($this.hasClass('header__nav-controls__control--search')) {
          if ($this.hasClass('header__nav-controls__control--active')) {
            $this.removeClass('header__nav-controls__control--active');
            $('.header__modals__modal--search').removeClass('header__modals__modal--active');
            $('body').css('overflow', '');
          } else {
            $el.globalNav.headerTrigger.removeClass('header__nav-controls__control--active');
            $this.addClass('header__nav-controls__control--active');
            $('.header__modals__modal').removeClass('header__modals__modal--active');
            $('.header__modals__modal--search').addClass('header__modals__modal--active');
            $('body').css('overflow', 'hidden');
          }
        } else if ($this.hasClass('header__nav-controls__control--nav')) {
          if ($this.hasClass('header__nav-controls__control--active')) {
            $this.removeClass('header__nav-controls__control--active');
            $('.header__modals__modal--nav').removeClass('header__modals__modal--active');
            $('body').css('overflow', '');
          } else {
            $el.globalNav.headerTrigger.removeClass('header__nav-controls__control--active');
            $this.addClass('header__nav-controls__control--active');
            $('.header__modals__modal').removeClass('header__modals__modal--active');
            $('.header__modals__modal--nav').addClass('header__modals__modal--active');
            $('body').css('overflow', 'hidden');
          }
        }
      });

      $el.feed.articleButtonsTrigger.on('click', (el) => {
        $this = $(el.target);
        if ($this.hasClass('buttons__button--social')) {
          if ($this.hasClass(activeButtonClass)) {
            $this.removeClass(activeButtonClass);
            $this.closest(feedContent).prev().find('.feed__article__details__content--social').removeClass(activeDetailClass);
          } else {
            $el.feed.articleButtonsTrigger.removeClass(activeButtonClass);
            $this.addClass(activeButtonClass);
            $(detailContent).removeClass(activeDetailClass);
            $this.closest(feedContent).prev().find('.feed__article__details__content--social').addClass(activeDetailClass);
          }
        } else if ($this.hasClass('buttons__button--tags')) {
          if ($this.hasClass(activeButtonClass)) {
            $this.removeClass(activeButtonClass);
            $this.closest(feedContent).prev().find('.feed__article__details__content--tags').removeClass(activeDetailClass);
          } else {
            $el.feed.articleButtonsTrigger.removeClass(activeButtonClass);
            $this.addClass(activeButtonClass);
            $(detailContent).removeClass(activeDetailClass);
            $this.closest(feedContent).prev().find('.feed__article__details__content--tags').addClass(activeDetailClass);
          }
        }
      });

      $('.carousel').each(function() {
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

      $('.section--gallery').each(function() {
        $(this).find('.slides').slick({
          slidesToShow: 1,
          adaptiveHeight: true
        });
      });

      if (settings.vpWidth >= 796) {
        heightsEqualizer();
      } else {
        setTimeout(function() {
          $('[data-key="sameHeights"]').css('height', 'auto');
        }, 250);
      }

      $(window).on('resize', windowResize);
    };

  NS.init = () => {
    bindEvents();
  };
})(jQuery, window.NS = window.NS || {});

// load when ready
jQuery(() => {
  window.NS.init();
});
