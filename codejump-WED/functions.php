<?php
/* ===========================
  基本セット＋便利機能
=========================== */

/* ------------------------------------
  ① CSS・JSの読み込み
------------------------------------ */
function my_theme_scripts() {
  // メインCSS
  wp_enqueue_style(
    'main-style',
    get_stylesheet_uri(),
    array(),
    filemtime(get_theme_file_path('style.css'))
  );
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');


/* ------------------------------------
  ② アイキャッチ画像
------------------------------------ */
add_theme_support('post-thumbnails');


/* ------------------------------------
  ③ HTML5対応
------------------------------------ */
add_theme_support('html5', array(
  'search-form',
  'comment-form',
  'comment-list',
  'gallery',
  'caption',
));


/* ------------------------------------
  ④ メニュー登録
------------------------------------ */
function register_my_menus() {
  register_nav_menus(array(
    'header' => 'ヘッダーメニュー',
    'footer' => 'フッターメニュー'
  ));
}
add_action('init', 'register_my_menus');


/* ------------------------------------
  ⑤ Gutenberg エディタスタイル
------------------------------------ */
add_theme_support('editor-styles');
add_editor_style('editor-style.css');


/* ------------------------------------
  ⑥ サイドバーウィジェット
------------------------------------ */
function my_theme_widgets() {
  register_sidebar(array(
    'name' => 'サイドバー',
    'id'   => 'sidebar-1',
    'before_widget' => '<div class="widget-item">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));
}
add_action('widgets_init', 'my_theme_widgets');


/* ------------------------------------
  ⑦ 絵文字の削除（高速化）
------------------------------------ */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


/* ------------------------------------
  ⑧ head 内の不要タグ削除
------------------------------------ */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');


/* ------------------------------------
  ⑨ Gutenberg のCSS削除（自作デザイン向け）
------------------------------------ */
add_action('wp_enqueue_scripts', function () {
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
  wp_dequeue_style('global-styles');
}, 100);


/* ------------------------------------
  ⑩ 投稿アーカイブページ有効化（便利）
------------------------------------ */
add_filter('register_post_type_args', function ($args, $post_type) {
  if ('post' === $post_type) {
    $args['has_archive'] = true;
  }
  return $args;
}, 10, 2);


/* ------------------------------------
  ⑪ カスタムサムネイルサイズ
------------------------------------ */
add_image_size('thumb-square', 600, 600, true);   // 正方形
add_image_size('thumb-wide', 1200, 630, true);    // OGP向け横長


/* ------------------------------------
  ⑫ OGP（SNS用画像）自動出力
------------------------------------ */
function my_add_ogp_tags() {
  if (is_singular()) {
    global $post;
    $title = esc_attr(get_the_title());
    $url   = esc_url(get_permalink());
    $img   = get_the_post_thumbnail_url($post->ID, 'thumb-wide');

    if (!$img) {
      $img = get_template_directory_uri() . "/img/ogp-default.png"; 
    }

    echo "\n<meta property='og:title' content='{$title}'>\n";
    echo "<meta property='og:url' content='{$url}'>\n";
    echo "<meta property='og:type' content='article'>\n";
    echo "<meta property='og:image' content='{$img}'>\n";
  }
}
add_action('wp_head', 'my_add_ogp_tags');


/* ------------------------------------
  ⑬ パンくずリスト（簡易版）
------------------------------------ */
function breadcrumb() {
  if (is_home() || is_front_page()) return;

  echo '<nav class="breadcrumb"><a href="/">HOME</a>';

  if (is_single()) {
    echo ' > <a href="' . get_post_type_archive_link('post') . '">記事一覧</a> > ' . get_the_title();
  } elseif (is_page()) {
    echo ' > ' . get_the_title();
  }

  echo '</nav>';
}