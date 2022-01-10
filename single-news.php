<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ニュース記事</title>
</head>

<body>
  <?php
  /*
Template Name: ニュース個別記事
Template Post Type: post
*/
  ?>
  <?php get_header(); ?>
  <!--全ページ共通タイトル部分-->

  <div class="main">
    <div class="news_top_title">
      <a href="<?php echo get_post_type_archive_link('news'); ?>">
        <h1 class="title_main">News</h1>
        <p class="title_sub">ニュース</p>
      </a>
    </div>
    <!--全ページ共通タイトル部分　ここまで-->
    <div class="news_main_content">
      <?php if (have_posts()) : the_post(); ?>
        <div class="news_headline">
          <h2 class="news_headline_txt">
            <?php the_title(); ?>
            <!--　タイトルの出力　-->
          </h2>
          <p class="news_headline_date">
            <?php echo get_the_date('Y-m-d'); ?>
            <!--　投稿日時の出力　-->
          </p>
          <div class="news_headline_category">
            <?php if (has_category()) : ?>
              <?php echo get_the_category_list(' '); ?>
            <?php endif; ?>
          </div>
          <!--　カテゴリーの出力　※CSS新規作成要！　-->

          <div class="news_headline_eyecacth">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>

            <?php endif; ?>
            <!--　サムネイルの表示　-->

          </div>
        </div>
        <hr class="news_border">
        <div class="news_sentence">
          <?php the_content(); ?>
          <!--　本文の出力　-->
        </div>
      <?php endif; ?>
      <!--　メインループの終了　-->
      <hr class="news_border">

      <div class="news_single_pagenavi">
        <?php previous_post_link('« %link', '前の記事へ'); ?>
        <p>　｜　</p>
        <a href="<?php echo get_post_type_archive_link('news'); ?>">一覧に戻る</a>
        <p>　｜　</p>
        <?php next_post_link('%link »', '次の記事へ'); ?>
      </div>

    </div>
  </div>




  <?php get_footer(); ?>
</body>

</html>