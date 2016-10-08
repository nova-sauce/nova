<section class="section section--image">
  <div class="section-wrapper">
    <?php foreach ($items as $delta => $item): ?>
      <div class="image" style="background-image: url('<?php print render($item); ?>');"></div>
    <?php endforeach; ?>
  </div>
</section>
