<?php

/**
 * Template name: Blog
 */
require_once('parts/header.php'); ?>

<section class="hero">
  <div class="container">
    <div class="hero__content">
      <span class="hero__tag">Blog</span>
      <h1 class="hero__subtitle">Dicas, Inspiração e Histórias</h1>
    </div>

    <?php the_post_thumbnail(); ?>
  </div>
</section>

<section class="blog">
  <div class="container">
    <div class="blog__title">
      <h2>Posts mais recentes</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum tempus hac tellus libero accumsan. </p>
    </div>

    <div class="blog__list">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
      );
      $posts = new WP_Query($args);
      if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post(); ?>

          <article class="blog__item">
            <?php the_post_thumbnail(); ?>
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn btn--primary">Leia mais</a>
          </article>

      <?php endwhile;
      endif; ?>
    </div>
  </div>
</section>

<?php require_once('parts/footer.php'); ?>