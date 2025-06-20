<?php require_once('parts/header.php'); ?>

<section class="hero">
  <div class="container hero__container">
    <div class="hero__content">
      <span class="hero__tag">Produtos</span>
      <h1 class="hero__subtitle"><strong><?php the_title(); ?></strong></h1>
      <?php the_excerpt(); ?>
      <div class="hero__content__buttons">

        <?php if (get_field('link_do_produto')) : ?>
          <a href="<?= the_field('link_do_produto'); ?>" class="btn btn-outline-primary">Adquira já</a>
        <?php endif; ?>
      </div>
    </div>

    <?php the_post_thumbnail('thumb-product-single', ['class' => 'img-fluid hero__image']); ?>
  </div>
</section>

<section class="product-content">
  <div class="container">
    <?php the_content(); ?>
  </div>
</section>

<section class="product-testimonial">
  <div class="container product-testimonial__container">
    <?php
    $args = array(
      'post_type' => 'depoimentos',
      'posts_per_page' => 1,
      'orderby'        => 'rand',
      'terms' => get_post_field('post_name', get_post()),
    );

    $testimonial = new WP_Query($args);
    if ($testimonial->have_posts()) : while ($testimonial->have_posts()) : $testimonial->the_post(); ?>

        <div class="product-testimonial__item">
          <?php the_content(); ?>
        </div>

        <div class="product-testimonial__author">
          <div class="product-testimonial__author__image">
            <?php if (has_post_thumbnail()) { ?>
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Imagem em destaque" />
            <?php } ?>
          </div>

          <div class="product-testimonial__author__content">
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
