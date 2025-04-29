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
  <a href="<?php the_permalink(); ?>" class="card-post__link">Continue lendo  →</a>
</article>