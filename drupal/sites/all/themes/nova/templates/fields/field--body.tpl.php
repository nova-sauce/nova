<section class="section section--copy">
  <div class="section-wrapper">
    <div class="open-html">
      <?php foreach ($items as $delta => $item): ?>
        <?php print render($item); ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>
