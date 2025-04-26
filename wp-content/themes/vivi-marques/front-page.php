<?php

/**
 * Template name: Home
 */
require_once('parts/header.php'); ?>

<section class="hero">
  <div class="container hero__container">
    <div class="hero__content">
      <h1 class="hero__title">Transformando Mulheres <strong><span>em</span> Líderes do Amanhã</strong></h1>
      <p class="hero__subtitle">Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam neque ultrices.</p>

      <div class="hero__content__buttons">
        <a href="#" class="btn">Saiba mais →</a>
        <a href="#" class="btn btn-outline-primary">Acesse agora</a>
      </div>
    </div>
  </div>

  <?php the_post_thumbnail('thumb-hero', ['class' => 'img-fluid hero__image']); ?>
</section>

<?php
$args = array(
  'post_type' => 'produtos',
  'posts_per_page' => 3,
  'order' => 'ASC',
);
$products = new WP_Query($args);
if ($products->have_posts()) : while ($products->have_posts()) : $products->the_post();

    $color_graph = get_field('color_graph');
?>

    <section class="product">
      <div class="container product__container">
        <div class="product__image">
          <?php the_post_thumbnail('thumb-product-home', ['class' => 'img-fluid']); ?>
        </div>

        <div class="product__content">
          <span class="product__content__tag"><?php the_title(); ?></span>
          <h2 class="product__content__title"><?= esc_html(get_field('home_title')); ?></h2>
          <?php the_excerpt(); ?>
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

      <?php
      $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => 3,
      );
      $testimonial = new WP_Query($args);
      if ($testimonial->have_posts()) : while ($testimonial->have_posts()) : $testimonial->the_post(); ?>

          <div class="testimonial__item">
            <p>«When applied to building block a website or similar work product, a Visual Guide can be an intermediate step toward the end goal of a complete website. By creating a visual guide along the way, the designer or developer can get input from the other people involved in the website such as the customer, their manager, and other members of the team.»</p>
          </div>

      <?php endwhile;
      endif; ?>

      <div class="testimonial__nav">
        <button>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.svg" alt="Avatar">
          <div class="testimonial__nav__name">
            <h3>Matt Cannon</h3>
            <p>Head of Marketing</p>
          </div>
        </button>

        <button>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.svg" alt="Avatar">
          <div class="testimonial__nav__name">
            <h3>Matt Cannon</h3>
            <p>Head of Marketing</p>
          </div>
        </button>

        <button>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.svg" alt="Avatar">
          <div class="testimonial__nav__name">
            <h3>Matt Cannon</h3>
            <p>Head of Marketing</p>
          </div>
        </button>
      </div>
    </div>
  </div>
</section>

<section class="blog-posts">
  <div class="container">
    <div class="blog-posts__title">
      <h2>Blog</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum tempus hac tellus libero accumsan. </p>
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
</section>

<?php require_once('parts/footer.php'); ?>