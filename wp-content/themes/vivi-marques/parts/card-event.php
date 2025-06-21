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
    <p><?= the_field('place'); ?></p>
  </div>

  <a href="<?= get_field('url') ? the_field('url') : the_permalink(); ?>" target="<?= get_field('url') ? '_blank' : ''; ?>" class="btn btn-outline-common">Saiba mais</a>
</article>