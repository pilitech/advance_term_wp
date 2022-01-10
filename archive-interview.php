<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>インタビュー一覧</title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/interview.css" />
</head>

<body>
  <?php
  /*
Template Name:　インタビュー一覧
Template Post Type: post
*/
  ?>

  <!--全ページ共通タイトル部分-->

  <?php get_header(); ?>

  <div class="interview_main">
    <h1 class="interview_title_main">INTERVIEW</h1>
    <p class="interview_title_sub">インタビュー</p>
    <!--全ページ共通タイトル部分　ここまで-->
    <div class="interview_main_content">

      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $my_query = new WP_Query();
      $args = array(
        'post_type' => 'post',
        'cat' => 5,
        'posts_per_page' => 10,
        'paged' => $paged,
      );
      $my_query->query($args);
      ?>
      <?php if ($my_query->have_posts()) :
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

          <a href="<?php the_permalink(); ?>" class="interview_member">
            <div class="interview_member_name">
              <?php the_title(); ?>
            </div>
            <div class="interview_member_img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php endif; ?>
            </div>
          </a>
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