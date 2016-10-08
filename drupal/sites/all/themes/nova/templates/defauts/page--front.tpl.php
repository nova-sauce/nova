<div class="hero" style="background-image: url('/<?php print IMG_PATH; ?>nova-hero.jpg');">
  <div class="hero__copy">
    <div class="hero__logo">
      <div class="logo"></div>
    </div>
    <div class="hero__title">
      <svg class="logo-text"><use xlink:href="#logo-text"></use></svg>
    </div>
    <div class="hero__by-line">
      <ul class="tagline">
        <li>Games</li>
        <li>Movies</li>
        <li>Comics</li>
      </ul>
    </div>
  </div>
</div>
<main class="content">
  <?php print render($page['content']); ?>
</main>
