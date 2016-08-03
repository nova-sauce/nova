<?php if ($tabs): ?>
  <?php print render($tabs); ?>
<?php endif; ?>
<?php if ($messages): ?>
  <div class="messages">
    <?php print $messages; ?>
  </div>
<?php endif; ?>
<?php print render($page['content']); ?>
