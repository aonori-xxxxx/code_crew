<?php get_header(); ?>
<section class="single-contents fullwidth">
  <div class="inner-width front-css__inner ">
    <?php if (have_posts()) : the_post(); ?>
      <?php echo the_content(); ?>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>