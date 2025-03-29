<footer class="footer">
  <div class="container">
    <div class="footer__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php the_custom_logo(); ?>

        <p>Lorem ipsum dolor sit amet consectetur dolol drakgonil adipiscing elit aliquam mauris</p>

        <div class="footer__newsletter">
          <form action="" method="post">
            <input type="email" name="email" placeholder="Cadastre-se na nossa newsletter" />
            <button type="submit">Inscrever</button>
          </form>
        </div>
      </a>
    </div>

    <div class="footer__menu">
      <h3>Menu</h3>

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
    </div>
  </div>

  <div class="container">
    <div class="footer__copyright">
      Copyright © <?php the_date('Y'); ?> <a href="#">Vivi Marques</a> | <a href="politica-de-privacidade">Política de privacidade</a> | <a href="#">Termos de uso</a>
    </div>

    <div class="footer__social">
      <ul class="social__list">
        <li><a href="https://www.instagram.com/vivimarquesoficial/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="Instagram" /></a></li>
        <li><a href="https://www.facebook.com/vivimarquesoficial/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="Facebook" /></a></li>
        <li><a href="https://www.linkedin.com/in/vivi-marques-0b1b4b1b8/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.svg" alt="LinkedIn" /></a></li>
        <li><a href="https://www.youtube.com/in/vivi-marques-0b1b4b1b8/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube.svg" alt="YouTube" /></a></li>
        <li><a href="https://www.tiktok.com/in/vivi-marques-0b1b4b1b8/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tiktok.svg" alt="TikTok" /></a></li>
      </ul>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>