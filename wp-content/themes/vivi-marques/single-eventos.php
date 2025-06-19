<?php require_once('parts/header.php'); ?>

<section class="hero">
  <div class="container">
    <div class="hero__content">
      <span class="hero__tag">Eventos</span>
      <h1 class="hero__subtitle">Acompanhe Nossa Agenda</h1>
    </div>

    <?php the_post_thumbnail(); ?>
  </div>
</section>

<section class="events">
  <div class="container">
    <div class="events__title">
      <h2>Próximos eventos</h2>
      <p>Participe de experiências que conectam, transformam e inspiram. Descubra o que vem por aí. </p>
    </div>

    <div class="events__list">
      <?php
      $args = array(
        'post_type' => 'agenda',
        'posts_per_page' => 3,
      );
      $product = new WP_Query($args);

      if ($product->have_posts()) : while ($product->have_posts()) : $product->the_post(); ?>

          <div class="events__item">
            <h3><?php the_title(); ?></h3>
            <p>Local</p>

            <a href="<?php the_permalink(); ?>">Saiba mais</a>
          </div>

      <?php endwhile;
      endif; ?>
    </div>
  </div>
</section>

<?php require_once('parts/footer.php'); ?>