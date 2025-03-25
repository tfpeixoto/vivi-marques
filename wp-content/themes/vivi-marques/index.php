<?php

/**
 * Template name: Blog
 */
require_once('parts/header.php'); ?>

<section class="page">
  <div class="container">
    <h1>Posts</h1>

    <div class="posts__list">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
      );
      $posts = new WP_Query($args);

      if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post(); ?>

          <div class="posts__post post">
            <a href="<?php the_permalink(); ?>" class="post__link">
              <picture class="post__image">
                <?php the_post_thumbnail(); ?>
              </picture>

              <div class="post__content">
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
              </div>
            </a>
          </div>

      <?php endwhile;
      endif; ?>
    </div>
</section>

<?php require_once('parts/footer.php'); ?>