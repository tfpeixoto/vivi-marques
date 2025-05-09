<?php require_once('parts/header.php'); ?>

<section class="hero">
  <div class="container">
    <div class="hero__content">
      <span class="hero__tag">Produtos</span>
      <h1 class="hero__subtitle">Escolha a Ferramenta para sua Jornada</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam neque ultrices.</p>
    </div>

    <?php the_post_thumbnail(); ?>
  </div>
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
                <span>Saiba mais →</span>
              </div>
            </a>
          </div>

      <?php endwhile;
      endif; ?>
    </div>
  </div>
</section>

<?php require_once('parts/footer.php'); ?>