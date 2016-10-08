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
      <a href="<?php print $fields['path']->content; ?>" class="square-pattern">
        <div class="image" style="background-image: url('<?php print $fields['field_image']->content; ?>');"></div>
      </a>
    </figure>
    <div class="feed__article__details">
      <div class="feed__article__details__content feed__article__details__content--social">
        <div class="label">Share:</div>
        <ul class="list list--social">
          <li><a href="http://www.facebook.com/sharer.php?u=<?php print $fields['path']->content; ?>" target="_blank"><img src="/<?php print IMG_PATH; ?>facebook-circle.png" alt="" /></a></li>
          <li><a href="http://twitter.com/share?url=<?php print $fields['path']->content; ?>&amp;text=<?php print $fields['title']->content; ?>&amp;hashtags=novasauce"><img src="/<?php print IMG_PATH; ?>twitter-circle.png" alt="" /></a></li>
          <li><a href="https://plus.google.com/share?url=<?php print $fields['path']->content; ?>" target="_blank"><img src="/<?php print IMG_PATH; ?>google-plus-circle.png" alt="" /></a></li>
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
        <h3 class="title">
          <a href="<?php print $fields['path']->content; ?>"><?php print $fields['title']->content; ?></a>
        </h3>
        <p class="text"><?php print $fields['body']->content; ?></p>
      </div>
    </main>
  </div>
</div>
