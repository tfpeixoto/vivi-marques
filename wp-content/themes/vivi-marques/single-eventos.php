<?php require_once('parts/header.php'); ?>

<main class="event">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
      the_content(); // ESSENCIAL PARA O ELEMENTOR
    endwhile;
  endif;
  ?>
</main>

<?php require_once('parts/footer.php'); ?>