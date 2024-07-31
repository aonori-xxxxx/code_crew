<footer class="footer fullwidth">

<figure class="footer-logo">
      <a href="">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer/logo.png" alt="">
      </a>
    </figure>
  
<div class="footer__inner flex inner-width">
    <?php
    wp_nav_menu([
      'theme_location' => 'place_footer',
      'container' => false,
      'menu_class' => 'footer-nav__menu flex'
    ]);
    ?>

  </div>
  <?php wp_footer(); ?>
</footer>

</body>

</html>