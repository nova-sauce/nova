<div class="hero">
  <div class="hero__copy">
    <div class="hero__logo">
      <div class="logo"></div>
    </div>
    <div class="hero__title">
      <h1 class="title">Uncharted 4: A Thief's End Preview</h1>
    </div>
    <div class="hero__by-line">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod. temporincididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="hero__social">
      <ul>
        <li class="hero__social-link hero__social-link--share"></li>
        <li class="hero__social-link hero__social-link--tags"></li>
        <li class="hero__social-link hero__social-link--comments"></li>
      </ul>
    </div>
  </div>
  <div class="hero__image" style="background-image: url('/<?php print IMG_PATH; ?>article-hero.jpg');"></div>
</div>
<main class="content">
  <?php print render($page['content']); ?>
</main>
