<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>会社概要</title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/company.css" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
  /*
  Template Name:会社概要
  */
  ?>
  <?php get_header(); ?>


  <!--全ページ共通タイトル部分-->

  <div class="main">
    <h1 class="title_main">COMPANY</h1>
    <p class="title_sub">会社概要</p>
    <!--全ページ共通タイトル部分　ここまで-->


    <div class="main_content">
      <table>
        <tr>
          <th>企業名</th>
          <td>株式会社estra</td>
        </tr>
        <tr>
          <th>設立</th>
          <td>2019年11月</td>
        </tr>
        <tr>
          <th>所在地</th>
          <td>
            〒151−0051<br>
            東京都渋谷区千駄ヶ谷5−8−4<br>
            第7瑞穂ビル 4階
          </td>
        </tr>
        <tr>
          <th>従業員数</th>
          <td>
            56名<br>
            (社員6名、業務委託40名、インターン生10名)
          </td>
        </tr>
        <tr>
          <th>事業内容</th>
          <td>教育関連サービス</td>
        </tr>
        <tr>
          <th>取引先銀行</th>
          <td>
            三井住友銀行<br>
            りそな銀行
          </td>
        </tr>
        <tr>
          <th>資本金</th>
          <td>
            ¥10,009,000<br>
            (2020年11月29日現在)
          </td>
        </tr>
        <tr>
          <th>役員</th>
          <td>山田太郎</td>
        </tr>
      </table>
    </div>
  </div>



  <?php get_footer(); ?>

</body>

</html>