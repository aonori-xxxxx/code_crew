<?php get_header(); ?>
<section class="single-contents fullwidth">
  <div class="inner-width">  
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="single-wrapper">          
           <?php the_content()?>      
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>