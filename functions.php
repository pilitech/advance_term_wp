<?php
/*　CSS読み込み　*/
function twpp_enqueue_styles()
{
  wp_enqueue_style('reset-sheet', get_template_directory_uri() . "/css/reset.css");
  wp_enqueue_style('main-style-sheet', get_template_directory_uri() . "/style.css");
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

add_filter('show_admin_bar', '__return_false');


function custum_print_styles()
{

  if (is_page()) {
    $page = get_post(get_the_ID());
    wp_enqueue_style($page->post_name, get_template_directory_uri() . '/css/contact.css' . $page->post_name . 'contact.css');
  }
}

add_action('wp_print_styles', 'custume_print_styles');

/*　CSS読み込み　ここまで　*/

/*　Javascript読み込み　*/
function twpp_enqueue_scripts()
{
  wp_enqueue_script(
    'main-js-sheet',
    get_template_directory_uri() . '/js/main.js',
    array(),
    false,
    true
  );
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_scripts');

add_theme_support('post-thumbnails');
/*　Javascript読み込み　ここまで　*/

/*　投稿記事のカテゴリ「interview」のみ"single-interview.php"を読み込む　*/
function template_include_change($template)
{
  if (is_single() && in_category('interview')) {
    $template = dirname(__FILE__) . '/single-interview.php';
  }
  return $template;
}
add_filter('template_include', 'template_include_change', 999);

/*　投稿記事のカテゴリ「interview」のみ"single-interview.php"を読み込む　ここまで　*/



/*　-------------------　以下未使用　---------------------　*/

/*　カスタム投稿タイプ追加：ニュース　*/
add_action('init', 'create_post_type');
function create_post_type()
{
  register_post_type('news', [
    'labels' => [
      'name' => 'ニュース',
      'singular_name' => 'news',
    ],
    'public' => true,
    'has_archive' => true,
    'menu_position' => 5,
    'show_in_rest' => true,
    array(
      'supports' => array('title', 'thumbnail', 'editor')
    )
  ]);
}

function custom_template_include($template)
{
  if (is_single() && in_category('news')) {
    $new_template = locate_template(array('single-news.php'));
    if ('' != $new_template) {
      return $new_template;
    }
  }
  return $template;
}
add_filter('template_include', 'custom_template_include', 99);

/*　カスタム投稿タイプ追加：ニュース　ここまで　*/

/*　カスタム投稿タイプ追加：インタビュー　*/

add_action('init', 'create_post_type_interview');
function create_post_type_interview()
{
  register_post_type('interview', [
    'labels' => [
      'name'          => 'インタビュー',
      'singular_name' => 'interview',
    ],
    'public'        => true,
    'has_archive'   => true,
    'menu_position' => 5,
    'show_in_rest'  => true,
    array(
      'supports' => array('title', 'thumbnail', 'editor')
    )
  ]);
}
function custom_template_include_interview($template)
{
  if (is_single() && in_category('interview')) {
    $new_template = locate_template(array('single-news.php'));
    if ('' != $new_template) {
      return $new_template;
    }
  }
  return $template;
}
add_filter('template_include', 'custom_template_include_interview', 99);

/*　カスタム投稿タイプ追加：インタビュー　ここまで　*/
