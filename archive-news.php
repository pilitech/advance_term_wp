<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ニュース</title>
  <?php if (is_single()) : ?>
    <link rel="stylesheet" href="<?php bloginfo('news'); ?>css/news.css" type="text/css" />
  <?php endif; ?>
</head>

<body>

  <?php
  /*
Template Name: ニュース一覧
Template Post Type: post
*/
  ?>

  <!--全ページ共通タイトル部分-->

  <?php get_header(); ?>


  <div class="main">
    <div class="news_top_title">
      <h1 class="title_main">News</h1>
      <p class="title_sub">ニュース</p>
    </div>
    <!--全ページ共通タイトル部分　ここまで-->

    <div class="news_main_content">
      <hr class="news_archive_border">

      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $my_query = new WP_Query();
      $args = array(
        'post_type' => 'post',
        'cat' => 9,
        'posts_per_page' => 10,
        'paged' => $paged,
      );
      $my_query->query($args);
      ?>
      <?php if ($my_query->have_posts()) :
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

          <div class="news_headline_category">
            <?php if (has_category()) : ?>
              <?php echo get_the_category_list(' '); ?>
            <?php endif; ?>
          </div>
          <!--　カテゴリーの出力　-->
          <a href="<?php the_permalink(); ?>">
            <p class="news_date">　　<?php echo get_the_date('Y-m-d'); ?></p>
            <h3 class="news_title">　　<?php the_title(); ?></h3>
          </a>
          <hr class="news_archive_border">
        <?php endwhile; ?>
      <?php else : ?>
        <p>記事が見つかりません</p>
      <?php endif; ?>

      <?php wp_reset_postdata();
      wp_reset_query(); ?>

      <div class="news_pagenavi">
        <?php if (function_exists('wp_pagenavi')) {
          wp_pagenavi(array(
            'query' => $my_query
          ));
        } ?>
      </div>
    </div>
  </div>




  </div>



  <?php get_footer(); ?>

</body>

</html>