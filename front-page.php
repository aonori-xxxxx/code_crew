<?php get_header(); ?>

<!-- ここからコンセプト -->
<section class="concept fullwidth">
  <div class="inner-width">
    <?php
    $post = get_page_by_path('concept');
    setup_postdata($post);
    ?>
    <h2 class="section__title"><?php the_title(); ?></h2>
    <div class="concept-text">
      <?php the_content(); ?>
    </div>
  </div>
</section>
<!-- ここから最新の投稿 -->
<section class="posts fullwidth">

  <div class="inner-width">
    <h2 class="section__title">最新の投稿</h2>
    <div class="cards--col3">
      <?php
      $post_pages = get_post_page();
      if ($post_pages->have_posts()) :
        while ($post_pages->have_posts()) :
          $post_pages->the_post(); ?>
          <div class="card bg--gray">
            <figure class="thumbtack"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/post/thumbtack.png" alt="code-crew"></figure>
            <h3 class="card__title"><?php the_title(); ?></h3>
            <div class="card__body">
              <a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>
            </div>
          </div>
          <!-- section-content -->
      <?php endwhile;
        wp_reset_postdata();
      endif; ?>
    </div>
    <!--contents -->
  </div>
</section>
<?php get_footer(); ?>