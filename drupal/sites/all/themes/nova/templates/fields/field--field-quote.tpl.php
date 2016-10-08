<section class="section section--pull-quote">
  <div class="section-wrapper">
    <?php foreach ($items as $delta => $item): ?>
      <blockquote class="blockquote"><p><?php print render($item); ?></p></blockquote>
    <?php endforeach; ?>
  </div>
</section>
