<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/about.css" />
</head>

<body>
  <?php
  /*
Template Name: 企業情報
*/
  ?>

  <?php get_header(); ?>

  <!--全ページ共通タイトル部分-->

  <div class="main">
    <div class="about_top">
      <h1 class="title_main">ABOUT US</h1>
      <p class="title_sub">企業情報</p>
      <!--全ページ共通タイトル部分　ここまで-->
      <h2 class="about_ttl_main">
        新しい教育の常識を作り<br>
        多くの人々に幸せを届ける。<br>
      </h2>
      <p class="about_ttl_sentence">
        estraが大切にすることは、教育のDX化で日本の教育を変革すること。<br>
        日本の教育にコーチングを普及し、自発的に目標達成ができる人材を育成する。<br>
      </p>
    </div>
    <div class="main_content">
      <a href="<?php echo home_url("greeting"); ?>">
        <div class="about_content">
          <div class="about_content_number">01</div>
          <div class="about_content_colunm">
            <div class="about_content_title">GREETING</div>
            <div class="about_content_title_sub">代表挨拶</div>
          </div>
        </div>
      </a>
      <a href="<?php echo home_url("philosophy"); ?>">
        <div class="about_content">
          <div class="about_content_number">02</div>
          <div class="about_content_colunm">
            <div class="about_content_title">PHILOSOHPY</div>
            <div class="about_content_title_sub">企業理念</div>
          </div>
        </div>
      </a>
      <a href="<?php echo home_url("company"); ?>">
        <div class="about_content">
          <div class="about_content_number">03</div>
          <div class="about_content_colunm">
            <div class="about_content_title">COMPANY</div>
            <div class="about_content_title_sub">会社概要</div>
          </div>
        </div>
      </a>
      <a href="<?php echo home_url("member"); ?>">
        <div class="about_content">
          <div class="about_content_number">04</div>
          <div class="about_content_colunm">
            <div class="about_content_title">MEMBER</div>
            <div class="about_content_title_sub">メンバー</div>
          </div>
        </div>
      </a>
    </div>
  </div>



  <?php get_footer(); ?>

</body>

</html>