<?php
  $str = $fields['field_category']->content;
  $str = strtolower($str);
?>
<div class="feed__article feed__article--<?php print $str; ?>" data-key="sameHeights">
  <div class="article__meta">
    <span class="article__meta__category"><?php print $fields['field_category']->content; ?> <?php print $fields['type']->content; ?></span>
    <span class="article__meta__date"><?php print $fields['created']->content; ?></span>
  </div>
  <div class="feed__article__container">
    <figure class="feed__article__image">
      <a href="" class="square-pattern">
        <div class="image" style="background-image: url('<?php print $fields['field_image']->content; ?>');"></div>
      </a>
    </figure>
    <div class="feed__article__details">
      <div class="feed__article__details__content feed__article__details__content--social">
        <div class="label">Share:</div>
        <ul class="list list--social">
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
      <div class="feed__article__details__content feed__article__details__content--tags">
        <div class="label">Related Tags:</div>
        <?php print $fields['field_tags']->content; ?>
      </div>
    </div>
    <main class="feed__article__content">
      <div class="feed__article__content__social">
        <div class="buttons">
          <div class="buttons__button buttons__button--tags"></div>
          <div class="buttons__button buttons__button--social"></div>
        </div>
      </div>
      <div class="feed__article__content__summary">
        <h3 class="title"><?php print $fields['title']->content; ?></h3>
        <p class="text"><?php print $fields['body']->content; ?></p>
      </div>
    </main>
  </div>
</div>
