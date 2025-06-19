<?php require_once('parts/header.php'); ?>

<section class="hero-post">
  <div class="container hero-post__container">
    <div class="hero-post__content">
      <span class="hero-post__breadcrumb"><a href="<?= home_url(); ?>">Home</a> | <?php the_title(); ?></span>
      <h1><?php the_title(); ?></h1>
      <?php the_excerpt(); ?>
    </div>

    <div class="hero-post__image">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-post-fallback.png" alt="<?php the_title(); ?>" class="img-fluid">
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="post-content">
  <div class="container">
    <div class="post-content__text">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php require_once('parts/footer.php'); ?>