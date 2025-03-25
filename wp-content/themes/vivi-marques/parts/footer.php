<footer class="footer">

  <?php
  wp_nav_menu(array(
    'theme_location' => 'footer-menu',
    'depth' => 2,
    'container' => 'div',
    'container_class' => 'collapse navbar-collapse header__menu',
    'container_id' => 'menu',
    'menu_class' => 'navbar-nav',
    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
    'walker' => new WP_Bootstrap_Navwalker(),
  ));
  ?>

  <div class="container">
    2024 Copyright . Todos os direitos reservados . <strong>Vivi Marques</strong> . <a href="politica-de-privacidade">Política de privacidade</a>
  </div>
</footer>

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>