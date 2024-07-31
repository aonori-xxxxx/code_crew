<?php get_header(); ?>
<section class="archive-contents fullwidth">
  <div class="inner-width">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="archive__title-wrapper">
          <i class="fas fa-check"></i><a href="<?php the_permalink(); ?>">
            <p class="archive-title"><?php echo the_title(); ?></p>
          </a>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>