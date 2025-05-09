<article class="card-event">

  <?php if (has_post_thumbnail()) : ?>

    <div class="card-event__image">
      <?php the_post_thumbnail(); ?>
    </div>

  <?php else : ?>

    <div class="card-event__image">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/thumb-event.webp" alt="Imagem do evento" class="img-fluid" width="172px" height="172px">
    </div>

  <?php endif; ?>

  <div class="card-event__content">
    <h3 class="card-event__title"><?php the_title(); ?></h3>
    <p>Local - UF</p>
  </div>

  <a href="<?php the_permalink(); ?>" class="btn btn-outline-common">Saiba mais</a>
</article>