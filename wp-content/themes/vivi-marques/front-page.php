<?php

/**
 * Template name: Home
 */
require_once('parts/header.php'); ?>

<section class="hero">
  <div class="container hero__container">
    <div class="hero__content">
      <h1 class="hero__title"><?= the_field('title'); ?></h1>
      <p class="hero__subtitle"><?= the_field('description'); ?></p>

      
    </div>
  </div>

  <?php the_post_thumbnail('thumb-hero', ['class' => 'img-fluid hero__image']); ?>
</section>

<?php
$args = array(
  'post_type' => 'produtos',
  'posts_per_page' => 3,
  'order' => 'DESC',
);
$products = new WP_Query($args);
if ($products->have_posts()) : while ($products->have_posts()) : $products->the_post();

    $color_graph = get_field('home_color_graph');
?>

    <section class="product">
      <div class="container product__container">
        <div class="product__image">
          <?php if (get_field('home_image_highlight')):
            $image = get_field('home_image_highlight');
          ?>

            <img class="img-fluid product__image__img" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" />

          <?php endif; ?>

          <div class="product__image__graph" style="background-color: <?= $color_graph ?>;"></div>
        </div>

        <div class="product__content">
          <span class="product__content__tag"><?php the_title(); ?></span>
          <h2 class="product__content__title"><?= esc_html(get_field('home_title')); ?></h2>
          <?= esc_html(get_field('home_description')); ?>
          <a href="<?php the_permalink(); ?>" class="btn btn--primary">Saiba mais</a>
        </div>

      </div>
    </section>

<?php endwhile;
endif; ?>

<section class="testimonials">
  <div class="container">
    <div class="testimonials__title">
      <h2>O que dizem nossos clientes</h2>
    </div>

    <div id="testimonial-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php
        $args = array(
          'post_type' => 'depoimentos',
          'posts_per_page' => 3,
          'terms' => 'home',
        );
        $count = 0;
        $testimonial = new WP_Query($args);
        if ($testimonial->have_posts()) : while ($testimonial->have_posts()) : $testimonial->the_post(); ?>

            <div class="carousel-item testimonials__item <?= $count == 0 ? 'active' : ''; ?>" data-bs-interval="5000">
              <?php the_content(); ?>
            </div>

        <?php
            $count++;
          endwhile;
        endif; ?>
      </div>

      <div class="carousel-indicators testimonials__nav">
        <?php
        $args = array(
          'post_type' => 'depoimentos',
          'posts_per_page' => 3,
          'terms' => 'home',
        );
        $count = 0;
        $testimonial = new WP_Query($args);
        if ($testimonial->have_posts()) : while ($testimonial->have_posts()) : $testimonial->the_post();
        ?>

            <button type="button" data-bs-target="#testimonial-carousel" data-bs-slide-to="<?= $count; ?>" aria-current="<?= $count == 0 ? 'true' : ''; ?>" aria-label="<?= the_title(); ?>" class="<?= $count == 0 ? 'active' : ''; ?>">
             <?php if ( has_post_thumbnail() ) { ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Imagem em destaque" />
            <?php } ?>
              <div class="testimonials__nav__name">
                <h3><?php the_title(); ?></h3>
                <p><?= get_field('position'); ?></p>
              </div>
            </button>

        <?php
            $count++;
          endwhile;
        endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- <section class="blog-posts">
  <div class="container">
    <div class="blog-posts__title">
      <h2>Blog</h2>
      <p>Histórias que conectam, inspiram e fortalecem </p>
    </div>

    <div class="blog-posts__list">
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
</section> -->

<?php require_once('parts/footer.php'); ?>