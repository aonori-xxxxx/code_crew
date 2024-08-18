<?php

// 外部ファイルの読み込み
function my_enqueue_styles()
{
  $uri = esc_url(get_template_directory_uri());
 
  // フォント
  wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', array());
  wp_enqueue_style('googlefonts-notosans', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap', array());

  // CSSファイル
  wp_enqueue_style('ress', $uri . '/assets/styles/ress.min.css', array(), false, 'all');
  wp_enqueue_style('swiper', $uri . '/assets/styles/swiper-bundle.min.css');

  if (is_single('394')) {
    wp_enqueue_style('lorder', $uri . '/assets/styles/style-lorder.css');
  } elseif (is_single('400')) {
    wp_enqueue_style('lorder2', $uri . '/assets/styles/style-lorder2.css');
  } elseif (is_single('428')) {
    wp_enqueue_style('lorder3', $uri . '/assets/styles/style-lorder3.css');
  }  
  wp_enqueue_style('style', $uri . '/assets/styles/style.css');

  // JavaScriptファイル
  wp_enqueue_script('jquery_js', "https://code.jquery.com/jquery-3.7.0.min.js", array());
  wp_enqueue_script('pace_js', $uri . '/assets/scripts/pace.js', array(), false, 'all');
  wp_enqueue_script('swiper_js', $uri . '/assets/scripts/swiper-bundle.min.js', array(), false, 'all');
  wp_enqueue_script('gsap_min', $uri . '/assets/scripts/gsap.min.js', array(), false, 'all');
  if (is_single('454')) {
    wp_enqueue_script('slider', $uri . '/assets/scripts/slider.js', array(), false, 'all');
  } elseif (is_single('467')) {
    wp_enqueue_script('slider2', $uri . '/assets/scripts/slider2.js', array(), false, 'all');
  } else {
    wp_enqueue_script('main_js', $uri . '/assets/scripts/main.js?v=2024', array(), false, 'all');
  }
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

// ヘッダー、フッターのカスタムメニュー化
register_nav_menus(array(
  'place_header' => 'ヘッダーナビ',
  'place_footer' => ' フッターナビ',
));

// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


// 投稿を取得する関数
function get_post_page($numbeer = 3)
{

  $args = array(
    'posts_per_page' => $numbeer,
    'post_type' => 'post',
  );
  $post_page = new WP_Query($args);
  return $post_page;
}

add_action('init', function () {
  remove_filter('the_content', 'wpautop');
});

function title_space_br()
{
  $title = get_the_title();
  $title = str_replace(" ", "<br>", $title);
  echo $title;
}

function get_flexible_excerpt($number)
{
  $value = get_the_excerpt();
  $value = wp_trim_words($value, $number, '...');
  return $value;
}

add_theme_support('post-thumbnails');

// 検索結果の画像用のサイズ設定
add_image_size('search', 168, 168, true);
