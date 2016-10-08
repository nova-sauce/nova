<div class="hero" style="background-image: url('/<?php print IMG_PATH; ?>basic-page-bg.jpg');">
  <div class="hero__copy">
    <div class="hero__logo">
      <div class="logo"></div>
    </div>
    <div class="hero__title">
      <h1 class="title"><?php print $title; ?></h1>
    </div>
  </div>
</div>
<main class="content">
  <?php print render($page['content']); ?>
</main>
