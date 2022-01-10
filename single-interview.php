<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>インタビュー</title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/interview_content.css" />
</head>

<body>
  <?php
  /*
Template Name: インタビュー個別記事
Template Post Type: post
*/
  ?>
  <?php get_header(); ?>

  <!--全ページ共通タイトル部分-->

  <div class="main">
    <div class="interview_top_title">
      <a href="<?php echo get_post_type_archive_link('interview'); ?>">
        <h1 class="title_main">Interview</h1>
        <p class="title_sub">インタビュー</p>
      </a>
    </div>
    <!--全ページ共通タイトル部分　ここまで-->

    <div class="main_content">
      <?php if (have_posts()) : the_post(); ?>
        <div class="interview_grid">
          <!-- grid1 -->
          <div class="interview_top_name">
            <hr class="interview_border">
            <div class="interview_top_name_span">
              <?php the_title(); ?>
            </div>
            <hr class="interview_border">
          </div>
          <!-- grid1　ここまで-->
          <!-- grid2 -->
          <div class="interview_top_img">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php endif; ?>
          </div>
          <!-- grid2　ここまで -->
          <!-- grid3 -->
          <div class="interview_sentence">
            <?php the_content(); ?>
          </div>
          <!-- grid3 ここまで -->
        </div>
      <?php endif; ?>

      <div class="news_single_pagenavi">
        <?php previous_post_link('« %link', '前の記事へ'); ?>
        <p>　｜　</p>
        <a href="<?php echo get_post_type_archive_link('interview'); ?>">一覧に戻る</a>
        <p>　｜　</p>
        <?php next_post_link('%link »', '次の記事へ'); ?>
      </div>
    </div>
  </div>


  <?php get_footer(); ?>


</body>

</html>