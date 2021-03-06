<!doctype html>
<html lang="en">
  <head profile="<?php print $grddl_profile; ?>">
    <?php print $head; ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0" />
    <meta name="google-site-verification" content="trqe7TJ3Wv3sPN45fOyvhIU3WbY9vhwHDMbvE7SjUko" />
    <meta name="description" content="This is the meta description" />
    <meta name="keywords" content="four,five,six">
    <meta name="author" content="Nova" />
    <title><?php print $head_title; ?></title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <?php print $styles; ?>
    <?php print $header_scripts; ?>
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes;?>>
    <div id="svgs">
      <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: none;">
        <symbol id="search-icon" viewBox="-193.4 29 23.4 23">
          <title>Search Icon</title>
          <path class="path1" d="M-184.9,46.6c-4.9-0.2-8.7-4.2-8.5-9.1s4.2-8.7,9.1-8.5c4.7,0.2,8.5,4,8.5,8.8C-175.9,42.7-180,46.7-184.9,46.6z M-184.9,30.4c-4.1,0.1-7.3,3.5-7.1,7.6c0.1,4.1,3.5,7.3,7.6,7.1c4-0.1,7.1-3.4,7.1-7.4C-177.4,33.7-180.8,30.4-184.9,30.4z M-172.2,52c-0.6,0-1.2-0.2-1.6-0.6l-6-5.8c-0.5-0.4-0.6-1-0.4-1.6c0.2-0.4,0.4-0.8,0.8-1.1c0.4-0.5,1-0.8,1.6-0.9c0.4,0,0.8,0.2,1.1,0.5l6,5.8c0.8,0.8,0.9,2.1,0.1,3c0,0,0,0-0.1,0.1C-171.1,51.8-171.6,52-172.2,52zM-178.8,44.5C-178.8,44.5-178.8,44.5-178.8,44.5l6.1,5.9c0.3,0.3,0.8,0.3,1.1,0c0.3-0.3,0.3-0.7,0-1c0,0,0,0,0,0l-6-5.8c0,0-0.1-0.1-0.1-0.1c-0.2,0.1-0.4,0.2-0.6,0.4C-178.6,44-178.7,44.2-178.8,44.5L-178.8,44.5L-178.8,44.5z" />
        </symbol>
        <symbol id="menu-icon" viewBox="-190 32 32 18">
          <title>Menu Icon</title>
          <path class="path1" d="M-190,32h3v2h-3V32z M-190,40h3v2h-3V40z M-190,48h3v2h-3V48z M-185,32h27v2h-27L-185,32z M-185,40h27v2h-27V40z M-185,48h27v2h-27L-185,48z" />
        </symbol>
        <symbol id="close-icon" viewBox="-197 31 19 19">
          <title>Close Icon</title>
          <path class="path1" d="M-196.7,48.3l17-17c0.4-0.4,1-0.4,1.4-0.1c0.4,0.4,0.4,1,0.1,1.4c0,0-0.1,0.1-0.1,0.1l-17,17c-0.4,0.4-1,0.4-1.4,0.1C-197.1,49.4-197.2,48.8-196.7,48.3C-196.8,48.3-196.7,48.3-196.7,48.3zM-196.7,31.3c0.4-0.4,1-0.4,1.4,0l17,17c0.4,0.4,0.4,1,0.1,1.4c-0.4,0.4-1,0.4-1.4,0.1c0,0-0.1-0.1-0.1-0.1l-17-17C-197.1,32.3-197.1,31.7-196.7,31.3C-196.7,31.3-196.7,31.3-196.7,31.3z" />
        </symbol>
        <symbol id="logo-text" viewBox="48 14 509.9 53">
          <title>Logo Text</title>
          <path class="path1" d="M280.8,60.2l-18.7-42.3c-0.8-2.2-2.9-3.7-5.2-3.7h-0.4c-2.4,0-4.5,1.4-5.3,3.7l-18.7,42.3c-0.3,0.6-0.5,1.3-0.6,2c0,2.3,1.7,4.1,4,4.2c0,0,0.1,0,0.1,0c1.8,0,3.5-1.1,4.1-2.8l4.2-9.9l3.4-8l8.8-20.7l8.8,20.7l3.4,8l4.1,9.6c0.6,1.9,2.3,3.1,4.3,3.1c2.3,0,4.2-1.9,4.2-4.2c0,0,0-0.1,0-0.1C281.3,61.5,281.2,60.8,280.8,60.2z M175.7,20.2l18.7,42.3c0.8,2.2,2.9,3.7,5.2,3.7h0.4c2.4,0,4.5-1.4,5.3-3.7L224,20.2c0.3-0.6,0.5-1.3,0.6-2c0-2.3-1.7-4.1-4-4.2c0,0-0.1,0-0.1,0c-1.8,0-3.5,1.1-4.1,2.8l-4.2,9.9l-3.4,8l-8.8,20.7l-8.8-20.7l-3.4-8l-4.1-9.6c-0.6-1.9-2.3-3.1-4.3-3.1c-2.3,0-4.2,1.9-4.2,4.2c0,0,0,0.1,0,0.1C175.2,19,175.3,19.7,175.7,20.2z M109.9,40.7v-0.1c0-14.4,10.9-26.4,26.4-26.4s26.2,11.9,26.2,26.3v0.1c0,14.4-10.9,26.4-26.4,26.4S109.9,55.1,109.9,40.7L109.9,40.7z M153.2,40.7v-0.1c0-9.9-7.1-18.2-17.1-18.2s-17,8.1-17,18v0.1c0,9.9,7.1,18.1,17.1,18.1S153.2,50.6,153.2,40.7L153.2,40.7z M48,19c0-2.5,1.9-4.5,4.4-4.5c0,0,0,0,0,0h0.9c2.2,0,3.4,1.1,4.6,2.6l25.1,33.1V18.8c0-2.4,1.9-4.3,4.3-4.3s4.3,1.9,4.3,4.3l0,0v42.9c0.1,2.4-1.8,4.4-4.2,4.5c0,0-0.1,0-0.1,0h-0.4c-2.1,0-3.4-1.1-4.6-2.7l-25.9-34v32.4c0,2.4-1.9,4.3-4.3,4.3S48,64.3,48,61.8L48,19L48,19z M297.7,59.6c-0.8-0.6-1-1.8-0.3-2.6c0.4-0.4,0.9-0.7,1.5-0.7c0.4,0,0.9,0.2,1.2,0.4c4.5,4.4,10.6,6.8,17,6.6c7.5,0,12.7-4.3,12.7-10.1v-0.1c0-5.4-2.8-8.5-14.2-10.9c-12.1-2.5-17-6.6-17-14.4v-0.1c0-7.6,6.8-13.4,16.2-13.4c5.8-0.2,11.5,1.7,16,5.3c0.5,0.4,0.8,0.9,0.8,1.5c0,1-0.8,1.9-1.9,1.9c-0.4,0-0.9-0.2-1.2-0.4c-3.9-3.2-8.8-4.9-13.9-4.8c-7.4,0-12.3,4.3-12.3,9.6v0.1c0,5.4,2.7,8.7,14.7,11.2c11.6,2.4,16.5,6.6,16.5,14.1v0.1c0,8.2-7,13.9-16.7,13.9C309.3,66.8,303.4,64.4,297.7,59.6L297.7,59.6z M407,44.8V16.6c0-1,0.8-1.9,1.9-1.9c1,0,1.9,0.8,1.9,1.9c0,0,0,0,0,0v27.9c0,12,6.4,19,17,19c10.2,0,16.7-6.3,16.7-18.6V16.6c0-1,0.8-1.9,1.9-1.9c1,0,1.9,0.8,1.9,1.9c0,0,0,0,0,0v27.8c0,14.7-8.4,22.5-20.6,22.5C415.5,66.9,407,59.1,407,44.8L407,44.8z M461.4,40.7v-0.1c0-14.5,10.6-26.4,25.1-26.4c8.3,0,13.6,2.9,18.5,7.2c0.4,0.4,0.7,0.9,0.7,1.5c0,1-0.9,1.9-1.9,1.9c-0.5,0-0.9-0.2-1.3-0.5c-4.2-3.9-9-6.6-16-6.6c-12.1,0-21.2,10-21.2,22.9v0.1c0,12.9,9.3,23,21.3,23c6.8,0,11.6-2.5,16.4-7.1c0.3-0.4,0.8-0.6,1.3-0.6c1,0,1.8,0.8,1.8,1.8c0,0.5-0.2,1-0.6,1.3c-5.1,4.8-10.6,8-19,8C472,66.9,461.4,55.3,461.4,40.7L461.4,40.7z M521.6,64.2V16.9c0-1,0.8-1.9,1.9-1.9h32.5c1,0.1,1.7,0.9,1.6,1.9c-0.1,0.9-0.8,1.6-1.6,1.6h-30.6v20.1h27.4c1,0,1.7,0.8,1.7,1.8c0,0.9-0.8,1.7-1.7,1.7h-27.4v20.5h31c1,0.1,1.7,0.9,1.6,1.9c-0.1,0.9-0.8,1.6-1.6,1.6h-32.8C522.4,66,521.6,65.2,521.6,64.2L521.6,64.2z M386.1,51.8l5.9,13.1c0.3,0.8,1,1.4,1.9,1.5c1,0,1.8-0.8,1.8-1.8c0-0.4-0.1-0.8-0.3-1.2L374,16.3c-0.4-1.1-1.4-1.8-2.5-1.8h-0.1c-1.1,0-2.2,0.7-2.5,1.8l-21.5,47.3c-0.2,0.4-0.3,0.8-0.3,1.2c0,0.9,0.8,1.6,1.7,1.6c0.8,0,1.6-0.6,1.8-1.4l5.9-13.2l14.9-33L386.1,51.8z" />
        </symbol>
      </svg>
    </div>
    <?php print $page_top; ?>
    <div class="container">
      <div class="site-wrapper">
        <header class="header">
          <div class="header__nav-controls">
            <div class="header__nav-controls__control header__nav-controls__control--search" data-control="search"> <span class="icon icon--search"><svg class="search-icon"><use xlink:href="#search-icon"></use></svg></span> <span class="icon icon--close"><svg class="close-icon"><use xlink:href="#close-icon"></use></svg></span> </div>
            <div class="header__nav-controls__control header__nav-controls__control--nav"
              data-control="nav"> <span class="icon icon--nav"><svg class="menu-icon"><use xlink:href="#menu-icon"></use></svg></span> <span class="icon icon--close"><svg class="close-icon"><use xlink:href="#close-icon"></use></svg></span> </div>
          </div>
          <div class="header__modals">
            <div id="search" class="header__modals__modal header__modals__modal--search">
              <div class="container">
                <div class="search-form">
                  <div class="search-form__input"> <input type="text" value="" class="field" placeholder="Search for News, Reviews or an specific Game, Movie or Comic Book" name="search-input" autocomplete="OFF" /> <input type="submit" value="search" name="" class="submit" /> </div>
                  <div class="search-form__popular-results"> <label class="search-form__popular-results__label">Popular:</label>
                    <ul class="search-form__popular-results__list">
                      <li><a href="#">Uncharted 4</a></li>
                      <li><a href="#">Suicide Squad</a></li>
                      <li><a href="#">Mighty Number 9</a></li>
                      <li><a href="#">The Killing Joke</a></li>
                      <li><a href="#">Game Reviews</a></li>
                      <li><a href="#">Lorem Ipsum</a></li>
                      <li><a href="#">Dolor</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div id="nav" class="header__modals__modal header__modals__modal--nav">
              <div class="container">
                <?php if ($main_menu): ?>
                  <nav class="site-nav">
                    <?php print render($main_menu); ?>
                  </nav>
                <?php endif; ?>
              </div>
              <div class="header__modals__modal__bg" style="background-image: url('/<?php print IMG_PATH; ?>menu-bg.jpg');"></div>
            </div>
          </div>
        </header>
        <div class="components">
          <?php print $page; ?>
        </div>
        <footer class="footer">
          <div class="footer__brand-info">
            <div class="footer__brand-info__logo">
              <div class="logo"></div>
              <svg class="logo-text"><use xlink:href="#logo-text"></use></svg>
            </div>
            <div class="footer__brand-info__disclaimer">
              <p>&copy; 2016 NOVASAUCE, LLC</p>
            </div>
          </div>
          <div class="footer__info">
            <ul class="social-icons">
              <li class="icon icon--facebook">
                <a href="https://www.facebook.com/novasauce/"></a>
              </li>
              <li class="icon icon--twitter">
                <a href="https://twitter.com/novasauceus"></a>
              </li>
              <li class="icon icon--instagram">
                <a href="https://www.instagram.com/novasauceus/"></a>
              </li>
              <!-- <li class="icon icon--vimeo">
                <a href="#"></a>
              </li>
              <li class="icon icon--gplus">
                <a href="#"></a>
              </li> -->
            </ul>
            <div class="footer__info__links">
              <?php if ($footer_menu_menu): ?>
                <?php print render($footer_menu_menu); ?>
              <?php endif; ?>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <?php print $page_bottom; ?>
    <div id="scripts">
      <?php print $scripts; ?>
    </div>
  </body>
</html>
