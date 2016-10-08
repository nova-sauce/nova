<section class="section section--gallery">
  <div class="section-wrapper">
    <div class="slides">
      <?php foreach ($items as $delta => $item): ?>
        <div class="slide"><?php print render($item); ?></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
