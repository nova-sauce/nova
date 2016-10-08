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
  <div class="feed <?php print $classes; ?>">
    <?php if ($attachment_before): ?>
      <?php print $attachment_before; ?>
    <?php endif; ?>
    <?php if ($rows): ?>
      <div class="view-content">
        <?php print $rows; ?>
      </div>
    <?php elseif ($empty): ?>
      <div class="view-empty">
        <?php print $empty; ?>
      </div>
    <?php endif; ?>
    <?php if ($pager): ?>
      <?php print $pager; ?>
    <?php endif; ?>
  </div>
</main>
