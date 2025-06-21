<?php

function cynthia_guedes_enqueue_styles_scripts()
{
  $style = '';

  // Page
  if (is_page() || is_single() || is_404() || is_page('blog')) {
    $style = 'page';
    wp_enqueue_script('page', get_template_directory_uri() . '/assets/js/' . $style . '.js', array(), time(), true);
  }

  // Home
  if (is_front_page() || is_page('home')) {
    $style = 'home';
    wp_enqueue_script('home', get_template_directory_uri() . '/assets/js/' . $style . '.js', array(), time(), true);
  }

  // Include style
  if ($style != '') {
    $style_path = get_template_directory_uri() . '/assets/css/' . $style . '.css';

    wp_enqueue_style('current', $style_path, array(), time());
  }

  // Remove support to block editor
  if (!is_single()) {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
  }

  /**
   * Include url
   */
  // wp_localize_script(
  //   'page',
  //   'data',
  //   array(
  //     'ajax_url' => admin_url('admin-ajax.php'),
  //   )
  // );
}
add_action('wp_enqueue_scripts', 'cynthia_guedes_enqueue_styles_scripts');
