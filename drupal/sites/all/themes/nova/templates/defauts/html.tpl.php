<!DOCTYPE html>
<html lang="en">
  <head profile="<?php print $grddl_profile; ?>">
    <?php print $head; ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0" />
    <meta name="google-site-verification" content="trqe7TJ3Wv3sPN45fOyvhIU3WbY9vhwHDMbvE7SjUko" />
    <meta name="description" content="This is the meta description" />
    <meta name="keywords" content="four,five,six">
    <meta name="author" content="Nova" />
    <title><?php print $head_title; ?></title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <?php print $styles; ?>
    <?php print $header_scripts; ?>
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes;?>>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php if ($main_menu): ?>
      <?php print render($main_menu); ?>
    <?php endif; ?>
    <?php print $search; ?>
    <?php print $page_bottom; ?>
    <div id="scripts">
      <?php print $scripts; ?>
    </div>
  </body>
</html>
