<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MZ4HQS6W');
  </script>
  <!-- End Google Tag Manager -->

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Raleway:ital,wght@0,100..900;1,100..900&family=Sora:wght@100..800&display=swap" rel="stylesheet">

  <link rel="icon" href="<?= get_template_directory_uri(); ?>/assets/images/favicon.svg" type="image/svg+xml">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZ4HQS6W"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="container header__container">
        <a class="navbar-brand" href="<?= home_url(); ?>"><?php /*<img src="<?= get_template_directory_uri(); ?>/assets/images/marca.webp" width="188" height="95" alt="Vivi Marques" />*/ ?> Vivi Marques</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <?php
        wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'depth' => 2,
          'container' => 'div',
          'container_class' => 'collapse navbar-collapse header__menu',
          'container_id' => 'menu',
          'menu_class' => 'navbar-nav',
          'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
          'walker' => new WP_Bootstrap_Navwalker(),
        ));
        ?>

        <a href="#">Compre agora</a>

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
    </nav>
  </header>