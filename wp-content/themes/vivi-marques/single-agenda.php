<?php require_once('parts/header.php'); ?>

<article class="single">
  <div class="container">
    <?php the_post_thumbnail(); ?>
    <h1>Agenda: <?php the_title(); ?></h1>
    <?php the_content(); ?>
  </div>
</article>

<?php require_once('parts/footer.php'); ?>