<?php

/**
 * Template name: Contato
 */
require_once('parts/header.php'); ?>

<section class="contact">
  <div class="container contact__container">
    <div class="contact__form">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>

    <div class="contact__image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-growth-mindset.webp" alt="Contato" class="contact__image--img">
    </div>
  </div>
</section>

<?php require_once('parts/footer.php'); ?>