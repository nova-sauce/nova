<div class="hero" style="background-image: url('/<?php print IMG_PATH; ?>nova-hero.jpg');">
  <div class="hero__copy">
    <div class="hero__logo">
      <a href="/"><div class="logo"></div></a>
    </div>
    <div class="hero__title">
      <a href="/"><svg class="logo-text"><use xlink:href="#logo-text"></use></svg></a>
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
