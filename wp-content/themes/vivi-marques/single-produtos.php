<?php require_once('parts/header.php'); ?>

<section class="hero">
  <div class="container">
    <div class="hero__content">
      <span class="hero__tag">Produtos</span>
      <h1 class="hero__subtitle"><?php the_title(); ?></h1>
      <?php the_excerpt(); ?>
    </div>

    <?php the_post_thumbnail(); ?>
  </div>
</section>

<section class="products-content">
  <div class="container">
    conteúdo
  </div>
</section>

<section class="testimonial-product">
  <div class="container">
    <?php
    $args = array(
      'post_type' => 'testimonial',
      'posts_per_page' => 3,
    );
    $testimonial = new WP_Query($args);
    if ($testimonial->have_posts()) : while ($testimonial->have_posts()) : $testimonial->the_post(); ?>

        <div class="testimonial-product__item">
          <?php the_content(); ?>
        </div>

        <div class="testimonial-product__author">
          <?php the_post_thumbnail(); ?>
          <h3><?php the_title(); ?></h3>
          <p>Cargo</p>
        </div>

    <?php endwhile;
    endif; ?>
</section>

<?php require_once('parts/footer.php'); ?>