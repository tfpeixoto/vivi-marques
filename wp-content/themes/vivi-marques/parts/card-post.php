<article class="card-post">
  <?php if (has_post_thumbnail()) : ?>
    <div class="card-post__image">
      <?php the_post_thumbnail(); ?>
    </div>

  <?php else : ?>

    <div class="card-post__image">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/default-image.jpg" alt="Imagem do post" class="img-fluid">
    </div>

  <?php endif; ?>

  <h3 class="card-post__title"><?php the_title(); ?></h3>
  <?php the_excerpt(); ?>
  <a href="<?php the_permalink(); ?>" class="card-post__link">
    Continue lendo
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M8.404 1.654 14.75 8l-6.346 6.346M14.75 8H1.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
  </a>
</article>