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

  <!--全ページ共通タイトル部分-->

  <?php get_header(); ?>


  <div class="main">
    <div class="news_top_title">
      <a href="<?php echo get_post_type_archive_link('news'); ?>">
        <h1 class="title_main">News</h1>
        <p class="title_sub">ニュース</p>
      </a>
    </div>
    <!--全ページ共通タイトル部分　ここまで-->


    <div class="news_main_content">

      <div class="news_cat">
        <p class="news_cat_txt">カテゴリー記事一覧</p>
        <h1 class="news_cat_ttl"><?php single_cat_title(); ?></h1>
        <!-- カテゴリーのタイトルを出力 -->
      </div>

      <hr class="news_archive_border">
      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;    //pagedに渡す変数
      query_posts($query_string . '&posts_per_page=5&paged=' . $paged);
      if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php if (!is_category() && has_category()) : ?>
            <div class="news_headline_category">
              <?php
              $postcat = get_the_category();
              echo $postcat[0]->name;
              ?>
            </div>
          <?php endif; ?>
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

      <div class="news_pagenavi">
        <?php if (function_exists('wp_pagenavi')) {
          wp_pagenavi();
        } ?>
        <div class="news_single_pagenavi">
          <a href="<?php echo get_post_type_archive_link('news'); ?>">一覧に戻る</a>
        </div>
      </div>

      <?php wp_reset_postdata();
      wp_reset_query(); ?>
    </div>

  </div>

  <?php get_footer(); ?>

</body>

</html>