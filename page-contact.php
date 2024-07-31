<?php get_header(); ?>
<section class="contact fullwidth">
  <div class="inner-width">
    <?php
    $contact = get_page_by_path('contact');
    $post = $contact;
    setup_postdata($post);
    ?>
    <p class="contact-lead">
      Code Crewでは一緒にコード集を作成してくれる仲間を募集しております。
      <br />
      色々なナレッジをみんなで作っていこう！
    </p>
    <div class="contact-form">
      <?php the_content(); ?>
    </div>
    <?php wp_reset_postdata(); ?>
  </div>
</section>
<!-- container -->
<?php get_footer(); ?>