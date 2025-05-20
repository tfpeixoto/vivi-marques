<?php

/**
 * Template name: Sobre
 */
require_once('parts/header.php'); ?>

<section class="hero">
  <div class="container hero__container">
    <div class="hero__content">
      <span class="tag"><?= the_field('tag'); ?></span>
      <h1 class="hero__title"><?= the_field('title'); ?></h1>
      <p><?= the_field('description'); ?></p>
    </div>
  </div>

  <?php the_post_thumbnail('thumb-hero', ['class' => 'img-fluid hero__image']); ?>
</section>

<section class="history">
  <div class="container">
    <div class="history__title">
      <h2>História</h2>
      <p>When applied to building block a website or similar work product, a Visual Guide can be an intermediate step toward the end goal of a complete website. By creating a visual guide along the way, the designer or developer can get input from the other people involved in the website such as the customer, their manager, and other members of the team.</p>
    </div>

    <div class="history__timeline">
      <ul class="timeline">
        <li class="timeline__item">
          <span class="timeline__year">2019</span>
          <span class="timeline__bullet"></span>
          <span class="timeline__content">Sunt nostrud amet sint do</span>
        </li>
        <li class="timeline__item even">
          <span class="timeline__year">2020</span>
          <span class="timeline__bullet"></span>
          <span class="timeline__content">Sunt nostrud amet sint do</span>
        </li>
        <li class="timeline__item">
          <span class="timeline__year">2021</span>
          <span class="timeline__bullet"></span>
          <span class="timeline__content">Sunt nostrud amet sint do</span>
        </li>
        <li class="timeline__item even">
          <span class="timeline__year">2022</span>
          <span class="timeline__bullet"></span>
          <span class="timeline__content">Sunt nostrud amet sint do</span>
        </li>
        <li class="timeline__item">
          <span class="timeline__year">2023</span>
          <span class="timeline__bullet"></span>
          <span class="timeline__content">Sunt nostrud amet sint do</span>
        </li>
      </ul>
    </div>
  </div>
</section>

<section class="founders">
  <div class="container founders__container">
    <div class="founders__image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-growth-mindset.webp" alt="Founders" class="founders__img">
    </div>

    <div class="founders__content">
      <span class="tag">Fundadores</span>
      <h2>Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis </h2>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam. Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.</p>

      <p>Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam. Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.</p>
    </div>
  </div>
</section>

<section class="purpose">
  <div class="container">
    <div class="purpose__title">
      <h2>Propósito</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam neque ultrices.</p>
    </div>

    <div class="purpose__list">
      <div class="purpose__item">
        <span>01</span>
        <h3>Missão</h3>
        <p>Lorem ipsum dolor sit amet consecte tur adipiscing elit semper dalaracc lacus vel facilisis volutpat est velitolm.</p>
      </div>

      <div class="purpose__item">
        <span>02</span>
        <h3>Visão</h3>
        <p>Lorem ipsum dolor sit amet consecte tur adipiscing elit semper dalaracc lacus vel facilisis volutpat est velitolm.</p>
      </div>

      <div class="purpose__item">
        <span>03</span>
        <h3>Valores</h3>
        <p>Lorem ipsum dolor sit amet consecte tur adipiscing elit semper dalaracc lacus vel facilisis volutpat est velitolm.</p>
      </div>
    </div>
  </div>
</section>

<?php require_once('parts/footer.php'); ?>