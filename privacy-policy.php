<?php
/*
Template Name: privacyページ
*/
?>

<?php get_header(); ?>


<section class="fullwidth privacy">
  <div class="privacy__inner">
    <?php if (have_posts()) : the_post(); ?>
      <?php echo the_content(); ?>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>