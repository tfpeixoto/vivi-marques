<footer class="footer">
  <div class="container footer__container">
    <div class="footer__content">
      <a class="footer__brand" href="<?= home_url(); ?>">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/vivi-marques.webp" width="230" height="45" alt="Vivi Marques" />
      </a>

      <p>Lorem ipsum dolor sit amet consectetur dolol drakgonil adipiscing elit aliquam mauris</p>

      <form action="" method="post" class="footer__newsletter">
        <input type="email" name="email" placeholder="Cadastre-se na nossa newsletter" />
        <button type="submit" class="btn btn-primary">Inscrever</button>
      </form>
    </div>

    <div class="footer__menu">
      <h3>Menu</h3>

      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'depth' => 1,
        'container' => 'div',
        'container_class' => 'collapse navbar-collapse footer__menu__nav',
        'container_id' => '',
        'menu_class' => 'navbar-nav',
        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
        'walker' => new WP_Bootstrap_Navwalker(),
      ));
      ?>
    </div>
  </div>

  <div class="container footer__copyright">
    <div class="footer__copyright__content">
      Copyright © <?php the_date('Y'); ?> <a href="<?= home_url(); ?>">Vivi Marques</a> | <a href="/politica-de-privacidade">Política de privacidade</a> | <a href="#">Termos de uso</a>
    </div>

    <div class="footer__copyright__social">
      <ul>
        <li>
          <a href="https://www.instagram.com/vivimarquesoficial/" target="_blank" rel="noopener noreferrer">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9 0c3.595 0 5.393 0 6.688.856a5.2 5.2 0 0 1 1.456 1.457C18 3.607 18 5.405 18 9s0 5.393-.856 6.688a5.2 5.2 0 0 1-1.456 1.456C14.393 18 12.595 18 9 18s-5.393 0-6.687-.856a5.2 5.2 0 0 1-1.457-1.456C0 14.393 0 12.595 0 9s0-5.393.856-6.687A5.2 5.2 0 0 1 2.313.855C3.607 0 5.405 0 9 0m0 4.34a4.66 4.66 0 1 0 0 9.32 4.66 4.66 0 0 0 0-9.32m0 1.577a3.083 3.083 0 1 1 0 6.166 3.083 3.083 0 0 1 0-6.166m4.844-2.905a1.095 1.095 0 1 0 0 2.19 1.095 1.095 0 0 0 0-2.19" fill="currentColor" />
            </svg>
          </a>
        </li>
        <li>
          <a href="https://www.facebook.com/vivimarquesoficial/" target="_blank" rel="noopener noreferrer">
            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6.373 18V9.79h2.895l.433-3.2H6.373V4.547c0-.927.27-1.558 1.666-1.558l1.78-.001V.126A25 25 0 0 0 7.224 0C4.659 0 2.902 1.491 2.902 4.23v2.36H0v3.2h2.902V18z" fill="currentColor" />
            </svg>
          </a>
        </li>
        <li>
          <a href="https://www.linkedin.com/in/vivi-marques-0b1b4b1b8/" target="_blank" rel="noopener noreferrer">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 1.991Q0 1.126.608.563 1.217 0 2.19 0q.956 0 1.547.554.608.571.608 1.49a1.82 1.82 0 0 1-.591 1.385q-.607.57-1.599.571h-.017q-.955 0-1.546-.571T0 1.99m.226 15.152V5.576h3.857v11.567zm5.994 0h3.857v-6.459q0-.606.14-.935.241-.589.738-.996.495-.407 1.242-.407 1.946 0 1.946 2.615v6.182H18V10.51q0-2.563-1.216-3.888T13.57 5.3q-2.242 0-3.493 1.922v.034h-.017l.017-.034V5.576H6.22q.035.555.035 3.446t-.035 8.12" fill="currentColor" />
            </svg>
          </a>
        </li>
        <li>
          <a href="https://www.youtube.com/in/vivi-marques-0b1b4b1b8/" target="_blank" rel="noopener noreferrer"><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="m9.92 13.413-3.897-.072c-1.262-.026-2.528.025-3.765-.238C.376 12.71.242 10.783.103 9.167a28.2 28.2 0 0 1 .245-6.839C.553 1.064 1.358.31 2.605.228c4.209-.3 8.445-.264 12.645-.125.443.012.89.082 1.327.161 2.158.387 2.21 2.57 2.35 4.409.14 1.857.081 3.723-.185 5.568-.214 1.527-.624 2.807-2.351 2.93-2.165.163-4.28.293-6.45.251 0-.01-.013-.01-.02-.01M7.63 9.547c1.63-.957 3.23-1.898 4.852-2.849C10.848 5.741 9.251 4.8 7.63 3.85z" fill="currentColor" />
            </svg>
          </a>
        </li>
        <li>
          <a href="https://www.tiktok.com/in/vivi-marques-0b1b4b1b8/" target="_blank" rel="noopener noreferrer">
            <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.685 4.757A4.805 4.805 0 0 1 11.88 0H8.778v8.475l-.004 4.641a2.812 2.812 0 0 1-4.255 2.408 2.8 2.8 0 0 1-1.371-2.367 2.812 2.812 0 0 1 3.697-2.709V7.306a6 6 0 0 0-.895-.067 5.95 5.95 0 0 0-4.47 1.999A5.83 5.83 0 0 0 .01 12.75a5.81 5.81 0 0 0 1.732 4.526q.266.262.561.49A5.95 5.95 0 0 0 5.95 19c.3 0 .602-.022.895-.067a5.94 5.94 0 0 0 3.311-1.657 5.8 5.8 0 0 0 1.743-4.132l-.015-6.935a7.8 7.8 0 0 0 1.743 1.015 7.8 7.8 0 0 0 3.066.617V4.753c.003.003-.008.003-.008.003" fill="currentColor" />
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>