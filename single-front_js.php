<?php get_header(); ?>
<section class="front-js fullwidth" id="front-js">
  <?php if (is_single('400')) : ?>
    <div class="inner-width">
      <?php the_content(); ?>
      <div class="spinner"></div>
    <?php elseif (is_single('454')) : ?>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php the_content(); ?>
        </div>
      </div>
    <?php elseif (is_single('467')) : ?>
      <div class="swiper swiper2">
        <div class="swiper-wrapper">
          <?php the_content(); ?>
        </div>
      </div>
    <?php elseif (is_single('473')) : ?>
      <div class="scroll-wrapper">
        <?php the_content(); ?>
      </div>
    <?php elseif (is_single('513')) : ?>
      <div class="slide-img-wrapper">
        <?php the_content(); ?>
      </div>
    <?php else : ?>
      <div class="inner-width">
        <?php the_content(); ?>
      </div>
    <?php endif; ?>
</section>
<?php get_footer(); ?>