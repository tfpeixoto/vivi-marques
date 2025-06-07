<?php

require_once 'includes/enqueue.php';
require_once 'includes/cpt.php';

/**
 * Register theme functions
 */
function vivi_marques_add_theme_resources()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
  add_image_size('single-image', 992, 0, array('center', 'center'));
  add_image_size('links-image', 200, 0, array('center', 'center'));
  add_post_type_support('especialidades', 'excerpt');
  add_post_type_support('page', 'excerpt');
}
add_action('after_setup_theme', 'vivi_marques_add_theme_resources');


/**
 * Register Custom Navigation Walker
 */
function vivi_marques_register_navwalker()
{
  require_once('includes/class-wp-bootstrap-navwalker.php');
}
add_action('after_setup_theme', 'vivi_marques_register_navwalker');

/**
 * Register Menus
 */
function vivi_marques_add_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu', 'vivi-marques'),
      'footer-menu' => __('Footer Menu', 'vivi-marques'),
    )
  );
}
add_action('after_setup_theme', 'vivi_marques_add_menus');

/**
 * Disable the emoji's
 */
function disable_emojis()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

  // Remove from TinyMCE
  add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}
add_action('init', 'disable_emojis');

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce($plugins)
{
  if (is_array($plugins)) {
    return array_diff($plugins, array('wpemoji'));
  } else {
    return array();
  }
}

/**
 * Add limit to excerpt function
 */
function vivi_marques_excerpt_length($length)
{
  return 20;
}
add_filter('excerpt_length', 'vivi_marques_excerpt_length');


function custom_comment_format($comment, $args, $depth)
{
?>
  <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
    <div class="comment-body">
      <div class="comment-avatar">
        <?= get_avatar($comment, 60); ?>
      </div>

      <div class="comment-content">
        <h3 class="comment-author">
          <?= get_comment_author(); ?>
        </h3>

        <div class="comment-text">
          <?php comment_text(); ?>
        </div>
      </div>
    </div>
  </li>
<?php
}
