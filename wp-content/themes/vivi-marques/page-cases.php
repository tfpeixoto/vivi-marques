<?php

/**
 * Template name: Cases
 */
require_once('parts/header.php'); ?>

<section class="hero">
  <div class="container">
    <div class="hero__content">
      <span class="hero__tag">Cases Inspiradores</span>
      <h1>Transformações Reais para Mulheres Empreendedoras</h1>
      <p>Breve texto apresentando o impacto positivo da mentoria e dos projetos liderados pela Vivi Marques</p>
    </div>

    <?php the_post_thumbnail(); ?>
  </div>
</section>

<section>
  <div class="container">
    Conteúdo
  </div>
</section>

<?php require_once('parts/footer.php'); ?>