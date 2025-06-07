<?php

/**
 * Template name: Cases
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

<section class="case-intro">
  <div class="container case-intro__container">
    <div class="case-intro__content">
      <h2 class="case-intro__title"><?= the_field('case_intro_title'); ?></h2>
      <p class="case-intro__description"><?= the_field('case_intro_description'); ?></p>
      <a href="<?= the_field('case_intro_link'); ?>" class="btn btn-secondary">Veja como podemos impactar você</a>
    </div>

    <div class="case-intro__image">
      <?php
      $image = get_field('case_intro_image');
      if ($image) :
      ?>

        <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="img-fluid">

      <?php endif; ?>
    </div>
  </div>
</section>

<section class="page-list page-list--secondary">
  <div class="container">
    <div class="page-list__title">
      <h2>Histórias de Sucesso</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum tempus hac tellus libero accumsan.</p>
    </div>

    <div class="products-list">
      <?php
      $args = array(
        'post_type' => 'cases',
        'posts_per_page' => 3,
      );
      $cases = new WP_Query($args);

      if ($cases->have_posts()) : while ($cases->have_posts()) : $cases->the_post(); ?>

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

<section class="benefits">
  <div class="container benefits__container">
    <div class="benefits__title">
      <span>Benefícios da Mentoria</span>
      <h2>O que torna nossas estratégias tão impactantes?</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit tortor eu egestas morbi sem vulputate etiam facilisis pellentesque ut quis.</p>
    </div>

    <div class="benefits__content">
      <ul>
        <li>All analytics features</li>
        <li>Up to 250,000 tracked visits</li>
        <li>Normal support</li>
        <li>Mobile app</li>
      </ul>
    </div>

    <div class="benefits__cta">
      <p>Quer ser o próximo case de sucesso? </p>
      <a href="<?= the_field('benefits_link'); ?>" class="btn btn-common">Entre em contato</a>
    </div>
  </div>
</section>

<section class="case-testimonial">
  <div class="container case-testimonial__container">
    <div class="case-testimoniail__title">
      <h2>O que elas dizem</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum tempus hac tellus libero accumsan. </p>
    </div>

    <div class="case-testimonial__content">
      Depoimento
    </div>
  </div>
</section>

<?php require_once('parts/footer.php'); ?>