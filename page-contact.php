<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


  <?php
  /*
  Template Name: お問い合わせ
  */
  ?>

  <?php get_header(); ?>

  <!--全ページ共通タイトル部分-->

  <div class="main">
    <h1 class="title_main">CONTACT</h1>
    <p class="title_sub">お問い合わせ</p>
    <!--全ページ共通タイトル部分　ここまで-->
    <div class="main_content">
      <h2 class="form_guidance">フォームからのお問い合わせ</h2>
      <p class="form_guidance_sub">
        記入内容の確認後、2~3営業日以内にご連絡させていただきます。<br>
        <span class="form_guidance_sub_span">＊</span>　は、入力必須項目となります。
      </p>

      <hr class="form_border">

      <form class="form" name="contact" method="POST">
        <?php echo do_shortcode('[contact-form-7 id="53" title="お問い合わせフォーム"]'); ?>

      </form>




    </div>
  </div>



  <?php get_footer(); ?>

</body>

</html>