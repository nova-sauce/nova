<section class="section section--video-upload">
  <div class="section-wrapper">
    <div class="video">
      <?php foreach ($items as $delta => $item): ?>
        <?php print render($item); ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>
