<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Top</title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/style.css" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="header">
    <h1 class="header-ttl">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="http://localhost/wp01/wp-content/uploads/2021/12/top_estra_logo.png" alt="estra inc.">

      </a>
    </h1>
    <nav class="header-nav">
      <ul class="header-nav-list">
        <li class="header-nav-item"><a href="<?php echo get_post_type_archive_link('news'); ?>">ニュース</a></li>
        <li class="header-nav-item"><a href="<?php echo home_url("service"); ?>">事業内容</a></li>
        <li class="header-nav-item"><a href="<?php echo home_url("about"); ?>">企業情報</a></li>
        <li class="header-nav-item"><a href="<?php echo home_url("recruit"); ?>">採用情報</a></li>
        <li class="header-nav-item"><a href="<?php echo home_url("contact"); ?>">お問い合わせ</a></li>
      </ul>
    </nav>
  </header>