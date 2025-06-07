<?php

/**
 * Template name: Agenda
 */
require_once('parts/header.php'); ?>

<section class="hero hero--blog">
  <div class="container hero__container">
    <div class="hero__content">
      <span class="hero__tag"><?= the_field('tag'); ?></span>
      <h1 class="hero__subtitle"><?= the_field('title'); ?></h1>
      <p><?= the_field('description'); ?></p>
    </div>

      <?php the_post_thumbnail('thumb-hero', ['class' => 'img-fluid hero__image']); ?>
  </div>
</section>

<section class="page-list">
  <div class="container">
    <div class="page-list__title">
      <h2>Próximos eventos</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum tempus hac tellus libero accumsan. </p>
    </div>

    <div class="page-list__list">
      <?php
      $args = array(
        'post_type' => 'agenda',
        'posts_per_page' => 3,
      );
      $product = new WP_Query($args);

      if ($product->have_posts()) : while ($product->have_posts()) : $product->the_post();

          get_template_part('parts/card', 'event');

        endwhile;
      endif; ?>
    </div>
  </div>
</section>

<?php require_once('parts/footer.php'); ?>