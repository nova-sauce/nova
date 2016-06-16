/*global module*/
/*
  Bind Events
------------------------------- */

module.exports = function() {
  'use strict';
  let $ = require('jQuery'),
    $this,
    feedContent = '.feed__article__content',
    detailContent = '.feed__article__details__content',
    activeDetailClass = 'feed__article__details__content--active',
    activeButtonClass = 'buttons__button--active',
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
    };

  $el.globalNav.headerTrigger.on('click', (evt) => {
    $this = $(evt.target).parent();
    if ($this.hasClass('header__nav-controls__control--search')) {
      if ($this.hasClass('header__nav-controls__control--active')) {
        console.log('test');
        $this.removeClass('header__nav-controls__control--active');
        $('.header__modals__modal--search').removeClass('header__modals__modal--active');
      } else {
        $el.globalNav.headerTrigger.removeClass('header__nav-controls__control--active');
        $this.addClass('header__nav-controls__control--active');
        $('.header__modals__modal').removeClass('header__modals__modal--active');
        $('.header__modals__modal--search').addClass('header__modals__modal--active');
      }
    } else if ($this.hasClass('header__nav-controls__control--nav')) {
      if ($this.hasClass('header__nav-controls__control--active')) {
        $this.removeClass('header__nav-controls__control--active');
        $('.header__modals__modal--nav').removeClass('header__modals__modal--active');
      } else {
        $el.globalNav.headerTrigger.removeClass('header__nav-controls__control--active');
        $this.addClass('header__nav-controls__control--active');
        $('.header__modals__modal').removeClass('header__modals__modal--active');
        $('.header__modals__modal--nav').addClass('header__modals__modal--active');
      }
    }
  });

  $el.feed.articleButtonsTrigger.on('click', (evt) => {
    $this = $(evt.target);
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
};
