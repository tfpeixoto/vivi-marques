<?php

/**
 * Template name: Sobre
 */
require_once('parts/header.php'); ?>

<section class="hero">
  <div class="container">
    <div class="hero__content">
      <span class="hero__tag">Sobre</span>
      <h1 class="hero__subtitle">Uma Jornada de Inspiração e Sucesso</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam neque ultrices.</p>
    </div>

    <?php the_post_thumbnail(); ?>
  </div>
</section>

<section class="history">
  <div class="container">
    <div class="history__title">
      <h2>História</h2>
      <p>«When applied to building block a website or similar work product, a Visual Guide can be an intermediate step toward the end goal of a complete website. By creating a visual guide along the way, the designer or developer can get input from the other people involved in the website such as the customer, their manager, and other members of the team.»</p>
    </div>

    <div class="history__timeline">
      Timeline
    </div>
  </div>
</section>

<section class="founders">
  <div class="container">
    <div class="founders__image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/founders.jpg" alt="Founders" class="founders__img">
    </div>

    <div class="founders__content">
      <span>Fundadores</span>
      <h2>Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis </h2>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam. Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.</p>

      <p>Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam. Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.</p>
    </div>
  </div>
</section>

<section class="purpose">
  <div class="container">
    <div class="purpose__title">
      <h2></h2>Propósito</h2>
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