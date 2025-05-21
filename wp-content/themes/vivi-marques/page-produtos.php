<?php 

/**
 * Template name: Produtos
 */
require_once('parts/header.php'); ?>

<section class="hero hero--internal">
  <div class="container hero__container">
    <div class="hero__content">
      <span class="hero__tag"><?= the_field('tag'); ?></span>
      <h1 class="hero__title"><?= the_field('title'); ?></h1>
      <p><?= the_field('description'); ?></p>
    </div>
  </div>

  <?php the_post_thumbnail('thumb-hero', ['class' => 'img-fluid hero__image']); ?>
</section>

<section class="page-list">
  <div class="container">
    <div class="page-list__title">
      <h2>Nossos produtos</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum tempus hac tellus libero accumsan. </p>
    </div>

    <div class="products-list">
      <?php
      $args = array(
        'post_type' => 'produtos',
        'posts_per_page' => 3,
      );
      $product = new WP_Query($args);

      if ($product->have_posts()) : while ($product->have_posts()) : $product->the_post(); ?>

          <div class="products-list__item">
            <a href="<?php the_permalink(); ?>" class="post__link">
              <?php the_post_thumbnail(); ?>

              <div class="products-list__content">
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <span>
                  Saiba mais
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.404 1.654 14.75 8l-6.346 6.346M14.75 8H1.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </div>
            </a>
          </div>

      <?php endwhile;
      endif; ?>
    </div>
  </div>
</section>

<section class="case-testimonial">
  <div class="container case-testimonial__container">
    <?php
    $args = array(
      'post_type' => 'depoimentos',
      'posts_per_page' => 1,
      'terms' => get_post_field('post_name', get_post()),
    );

    $testimonial = new WP_Query($args);
    if ($testimonial->have_posts()) : while ($testimonial->have_posts()) : $testimonial->the_post(); ?>

        <div class="case-testimonial__item">
          <?php the_content(); ?>
        </div>

        <div class="case-testimonial__author">
          <div class="case-testimonial__author__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-avatar.webp" alt="Avatar">
          </div>

          <div class="case-testimonial__author__content">
            <p>
              <strong><?php the_title(); ?></strong>
              <?= the_field('position'); ?>
            </p>
          </div>
        </div>

    <?php endwhile;
    endif; ?>
</section>


<?php require_once('parts/footer.php'); ?>