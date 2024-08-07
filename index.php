
<?php get_header(); ?>

<div class="inner-width">
    <?php if (have_posts()) : the_post(); ?>
      <?php echo the_content(); ?>
    <?php endif; ?>
  </div>

<?php get_footer(); ?>
  

