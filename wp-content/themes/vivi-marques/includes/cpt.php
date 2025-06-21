<?php

/**
 * Custom post type Products
 */
function vivi_marques_post_type_products()
{
  $nomeSingular = 'Produto';
  $nomePlural = 'Produtos';
  $description = $nomeSingular;

  $labels = array(
    'name' => $nomePlural,
    'singular_name' => $nomeSingular,
    'add_new_item' => "Adicionar novo " . $nomeSingular,
    'edit_item' => 'Editar ' . $nomeSingular,
  );

  $supports = array(
    'title',
    'editor',
    'thumbnail',
    'excerpt'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => $description,
    'menu_icon' => 'dashicons-cart',
    'supports' => $supports,
    'show_in_rest' => true,
  );

  register_post_type('produtos', $args);
}
add_action('init', 'vivi_marques_post_type_products');

/**
 * Custom post type Testimonials
 */
function vivi_marques_post_type_testimonial()
{
  $nomeSingular = 'Depoimento';
  $nomePlural = 'Depoimentos';
  $description = $nomeSingular;

  $labels = array(
    'name' => $nomePlural,
    'singular_name' => $nomeSingular,
    'add_new_item' => "Adicionar novo " . $nomeSingular,
    'edit_item' => 'Editar ' . $nomeSingular,
  );

  $supports = array(
    'title',
    'editor',
    'thumbnail'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => $description,
    'menu_icon' => 'dashicons-format-quote',
    'supports' => $supports,
    'show_in_rest' => true,
    'has_archive' => true,
    'taxonomies'  => array('exibicao')
  );

  register_post_type('depoimentos', $args);
}
add_action('init', 'vivi_marques_post_type_testimonial');

function create_taxonomy_testimonial()
{
  $labels = array(
    'name'              => 'Exibição',
    'singular_name'     => 'Exibição',
    'search_items'      => 'Buscar Exibições',
    'all_items'         => 'Todas as Exibições',
    'parent_item'       => 'Exibição Pai',
    'parent_item_colon' => 'Exibição Pai:',
    'edit_item'         => 'Editar Exibição',
    'update_item'       => 'Atualizar Exibição',
    'add_new_item'      => 'Adicionar Nova Exibição',
    'new_item_name'     => 'Novo Nome da Exibição',
    'menu_name'         => 'Exibição',
  );

  $args = array(
    'hierarchical'      => true, // true = categorias, false = tags
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
    'query_var'         => true,
    'rewrite'           => array('slug' => 'exibicao'),
  );

  register_taxonomy('exibicao', array('depoimentos'), $args);
}
add_action('init', 'create_taxonomy_testimonial');


/**
 * Custom post type Cases
 */
function vivi_marques_post_type_cases()
{
  $nomeSingular = 'Case';
  $nomePlural = 'Cases';
  $description = $nomeSingular;

  $labels = array(
    'name' => $nomePlural,
    'singular_name' => $nomeSingular,
    'add_new_item' => "Adicionar novo " . $nomeSingular,
    'edit_item' => 'Editar ' . $nomeSingular,
  );

  $supports = array(
    'title',
    'excerpt',
    'editor',
    'thumbnail',
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => $description,
    'menu_icon' => 'dashicons-admin-page',
    'supports' => $supports,
    'show_in_rest' => true,
  );

  register_post_type('cases', $args);
}
add_action('init', 'vivi_marques_post_type_cases');

/**
 * Custom post type Products
 */
function vivi_marques_post_type_events()
{
  $nomeSingular = 'Evento';
  $nomePlural = 'Eventos';
  $description = $nomeSingular;

  $labels = array(
    'name' => $nomePlural,
    'singular_name' => $nomeSingular,
    'add_new_item' => "Adicionar novo " . $nomeSingular,
    'edit_item' => 'Editar ' . $nomeSingular,
  );

  $supports = array(
    'title',
    'editor',
    'thumbnail',
    'excerpt'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => $description,
    'menu_icon' => 'dashicons-calendar',
    'supports' => $supports,
    'show_in_rest' => true,
    'hierarchical' => false,
  );

  register_post_type('eventos', $args);
}
add_action('init', 'vivi_marques_post_type_events');
