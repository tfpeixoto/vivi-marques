<?php

/**
 * Template name: 404
 */
require_once('parts/header.php'); ?>

<section class="not-found">
  <div class="container not-found__container">
    <h1>404</h1>
    <p>Ops! A página que você procura não foi encontrada.</p>
    <a href="<?= home_url(); ?>" class="btn btn-secondary">Voltar para a home</a>
  </div>
</section>

<?php require_once('parts/footer.php'); ?>