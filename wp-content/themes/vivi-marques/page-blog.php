<?php 

/**
 * Template name: Blog
 */
require_once('parts/header.php'); ?>

<section class="hero hero--blog">
  <div class="container hero__container">
    <div class="hero__content">
      <span class="hero__tag"><?= the_field('tag'); ?></span>
      <h1 class="hero__title"><?= the_field('title'); ?></h1>
      <p><?= the_field('description'); ?></p>
    </div>

      <?php the_post_thumbnail('thumb-hero', ['class' => 'img-fluid hero__image']); ?>
  </div>
</section>

<section class="page-list">
  <div class="container">
    <div class="page-list__title">
      <h2>Posts mais recentes</h2>
      <p>Mais que um blog, uma comunidade de mulheres que se apoiam. </p>
    </div>

    <div class="page-list__list">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
      );
      $posts = new WP_Query($args);
      if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post();

          get_template_part('parts/card', 'post');

        endwhile;
      endif; ?>
    </div>
  </div>
</section>

<?php require_once('parts/footer.php'); ?>