<?php

define('THEME_PATH', drupal_get_path('theme', 'nova'));
define('IMG_PATH', THEME_PATH . '/img/');

/**
 * Implements hook_preprocess_html().
 */
function nova_preprocess_html(&$vars) {
  // drupal_add_js(THEME_PATH . '/js/libs/min/modernizr.min.js', array('scope' => 'header_scripts', 'every_page' => TRUE, 'weight' => 0));
  drupal_add_js(THEME_PATH . '/js/libs.min.js', array('scope' => 'header', 'group' => JS_LIBRARY, 'every_page' => TRUE, 'weight' => 0));
  drupal_add_js(THEME_PATH . '/js/nova.min.js', array('scope' => 'header', 'group' => JS_THEME, 'every_page' => TRUE, 'weight' => 1));

  $current_entity = menu_get_object('node');

  if ($current_entity && isset($current_entity->type)) {
    $vars['theme_hook_suggestions'][] = 'html__' . $current_entity->type;
    switch ($current_entity->type) {
      case 'landing_page':
        $vars['classes_array'][] = 'page';
        break;
      default:
        // do something
        break;
    }
  } elseif (isset($current_entity->vocabulary_machine_name)) {
    $vocabularies = array('categories', 'artice-tags');
    if (in_array($current_entity->vocabulary_machine_name, $vocabularies)) {
      $vars['classes_array'][] = 'listing';
      $vars['classes_array'][] = $current_entity->vocabulary_machine_name . '-listing';
    }
  }

  // Get the entire main menu tree.
  $main_menu_tree = menu_tree_all_data('main-menu');
  // Add the rendered output to the $main_menu_expanded variable.
  $vars['main_menu'] = menu_tree_output($main_menu_tree);
  // Get the entire foter menu menu tree.
  $footer_menu_menu_tree = menu_tree_all_data('menu-footer-menu');
  // Add the rendered output to the $footer_menu_menu_tree variable.
  $vars['footer_menu_menu'] = menu_tree_output($footer_menu_menu_tree);
}

/**
 * Implements hook_process_html().
 */
function nova_process_html(&$vars) {
  // http://sonspring.com/journal/html5-in-drupal-7
  // Minify HTML output.
  $vars['header_scripts'] = drupal_get_js('header_scripts');
  $before = array(
    "/>\s\s+/",
    "/\s\s+</",
    "/>\t+</",
    "/\s\s+(?=\w)/",
    "/(?<=\w)\s\s+/"
  );
  $after = array('> ', ' <', '> <', ' ', ' ');
  // Page top.
  $page_top = $vars['page_top'];
  $page_top = preg_replace($before, $after, $page_top);
  $vars['page_top'] = $page_top;
  // Page content.
  if (!preg_match('/<pre|<textarea/', $vars['page'])) {
    $page = $vars['page'];
    $page = preg_replace($before, $after, $page);
    $vars['page'] = $page;
  }
  // Page bottom.
  $page_bottom = $vars['page_bottom'];
  $page_bottom = preg_replace($before, $after, $page_bottom);
  $vars['page_bottom'] = $page_bottom . drupal_get_js('footer');
}

/**
 * Implements hook_process_html_tag().
 */
function nova_process_html_tag(&$vars) {
  // http://sonspring.com/journal/html5-in-drupal-7
  // Purge needless XHTML stuff.
  $el = &$vars['element'];
  // Remove type="..." and CDATA prefix/suffix.
  unset($el['#attributes']['type'], $el['#value_prefix'], $el['#value_suffix']);
  // Remove media="all" but leave others unaffected.
  if (isset($el['#attributes']['media']) && $el['#attributes']['media'] === 'all') {
    unset($el['#attributes']['media']);
  }
}

/**
 * Implements hook_preprocess_page().
 */
function nova_preprocess_page(&$vars) {
  // https://www.drupal.org/node/1089656
  // Specific page templates for each content type.
  if (isset($vars['node'])) {
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }
}

/**
 * Implements hook_css_alter().
 */
function nova_css_alter(&$css) {
  // Unset core css for better performance and less risk of conflicts.
  $system_path = drupal_get_path('module', 'system');
  unset(
    $css[$system_path . '/system.base.css'],
    $css[$system_path . '/system.menus.css'],
    $css[$system_path . '/system.messages.css'],
    $css[$system_path . '/system.theme.css'],
    $css[drupal_get_path('module', 'comment') . '/comment.css'],
    $css[drupal_get_path('module', 'field') . '/theme/field.css'],
    $css[drupal_get_path('module', 'node') . '/node.css'],
    $css[drupal_get_path('module', 'search') . '/search.css'],
    $css[drupal_get_path('module', 'user') . '/user.css'],
    $css[drupal_get_path('module', 'views') . '/css/views.css'],
    $css[drupal_get_path('module', 'ckeditor') . '/css/ckeditor.css'],
    $css[drupal_get_path('module', 'ctools') . '/css/ctools.css']
  );
}

/**
 * Implements hook_js_alter().
 */
function nova_js_alter(&$js) {
  // Unset core js for better performance and less conflicts.
  unset($js['misc/jquery.js']);
  $js['misc/jquery.once.js']['weight'] = 1;
  $js['misc/drupal.js']['weight'] = 2;
}
