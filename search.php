<?php
/*
Template Name: searchページ
*/
?>
<?php get_header(); ?>
<div class="search-wrapper">
  <?php if (get_search_query()) : ?>
    <h3 class="search-result__title"><?php the_search_query(); ?>の検索結果</h3>
    <p class="search-result-count"><?php echo $wp_query->found_posts; ?>件</p>
  <?php endif; ?>

  <?php
  if (have_posts() && get_search_query()) :
    while (have_posts()) : the_post();
  ?>
      <ul class="search-result-list">
        <li class="search-result-item">
          <a href="<?php the_permalink(); ?>">
            <div class="search-result-wrapper">
              <figure class="search-result-img">
                <?php
                $image = get_the_post_thumbnail($post->ID, 'search');
                if ($image) {
                  echo $image;
                } else {
                  echo '<img src"' . get_template_directory_uri() . '/assets/images/search/noimage.png"/>';
                };
                ?>
              </figure>
              <h3 class="search-result-title"><?php the_title(); ?></h3>
              <!-- search-result-list-title -->
            </div>
            <!-- search-result-list-item__wrapper -->
          </a>
        </li>
      </ul>
    <?php endwhile; ?>
  <?php elseif (!get_search_query()) : ?>
    <p>検索ワードが入力されていません</p>
  <?php else : ?>
    <p>該当する記事は見つかりませんでした。</p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>