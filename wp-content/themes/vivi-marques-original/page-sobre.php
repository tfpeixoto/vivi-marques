<?php

/**
 * Template name: Sobre
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

<section class="history">
  <div class="container">
    <div class="history__title">
      <h2><?= the_field('about_title'); ?></h2>
      <p><?= the_field('about_description'); ?></p>
    </div>

    <div class="history__timeline">
      <ul class="timeline">
        <?php
        if (have_rows('timeline')):
          $count = 0;

          while (have_rows('timeline')) : the_row();

            $year = get_sub_field('year');
            $content = get_sub_field('content');
        ?>

            <li class="timeline__item <?= $count % 2 == 0 ? 'even' : ''; ?>">
              <span class="timeline__year"><?= $year; ?></span>
              <span class="timeline__bullet"></span>
              <span class="timeline__content"><?= $content; ?></span>
            </li>

        <?php
            $count++;
          endwhile;
        endif;
        ?>
      </ul>
    </div>
  </div>
</section>

<section class="founders">
  <div class="container founders__container">
    <div class="founders__image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-growth-mindset.webp" alt="Founders" class="founders__img img-fluid">
    </div>

    <div class="founders__content">
      <span class="tag"><?= the_field('founders_tag'); ?></span>
      <h2><?= the_field('founders_title'); ?></h2>
      <?= the_field('founders_content'); ?>
    </div>
  </div>
</section>

<section class="purpose">
  <div class="container">
    <div class="purpose__title">
      <h2><?= the_field('purpose_title'); ?></h2>
      <p><?= the_field('purpose_description'); ?></p>
    </div>

    <div class="purpose__list">
      <?php
      if (have_rows('purpose_items')):
        while (have_rows('purpose_items')) : the_row();

          $number = get_sub_field('purpose_item_number');
          $title = get_sub_field('purpose_item_title');
          $content = get_sub_field('purpose_item_content');
      ?>

          <div class="purpose__item">
            <span><?= $number; ?></span>
            <h3><?= $title; ?></h3>
            <p><?= $content; ?></p>
          </div>

      <?php
        endwhile;
      else :

        echo '<p>Em breve</p>';

      endif;
      ?>
    </div>
  </div>
</section>

<?php require_once('parts/footer.php'); ?>