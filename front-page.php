  <?php get_header(); ?>


  <div class="top_eyecatch">
    <div class="top_eyecatch_img">
      <img src="http://localhost/wp01/wp-content/uploads/2021/12/top_img1-1.png" alt="no image">
    </div>
    <div class="top_eyecatch_sentence">
      Commit<br>
      to the growth<br>
      for everyone
    </div>
  </div>

  <main class="main">

    <div class="news">

      <a href="<?php echo get_post_type_archive_link('news'); ?>">
        <div class="top_ttl">
          <h1 class="top_ttl_txt">NEWS</h1>
          <p class="top_title_sub">ニュース</p>
        </div>
      </a>

      <?php query_posts(array(
        'post_type' => 'post',
        'cat' => 9,
        'posts_per_page' => 1,
        'paged' => get_query_var('paged')
      )); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <a href="<?php the_permalink(); ?>" class="news_menu">
            <div class="text-menu">
              <p class="news_menu_date">　　<?php echo get_the_date('Y-m-d'); ?></p>
              <h3 class="news_menu_sentence">　　<?php the_title(); ?></h3>
            </div>
          </a>
        <?php endwhile; ?>
      <?php else : ?>
        <p>記事が見つかりません</p>
      <?php endif; ?>

      <?php wp_reset_query(); ?>
      <!--　サブループの終了　-->
    </div>




    <div class="service">
      <div class="top_ttl">
        <h1 class="top_ttl_txt">SERVICE</h1>
        <p class="top_title_sub">サービス</p>
      </div>
      <a href="<?php echo home_url("service"); ?>">
        <div class="service_menu">
          <div class="service_menu_img">
            <img src="http://localhost/wp01/wp-content/uploads/2021/12/service_img1.jpg" alt="no image">
          </div>
          <div class="service_menu_txt">
            <h2 class="service_menu_ttl">COACHTECH</h2>
            <p class="service_menu_sentence">
              COACHTECH(コーチテック)は<br>
              フリーランス特化型のオンラインコーチング<br>
              プログラミングスクールです。<br>
              <br>
              プログラミング未経験の方でも、<br>
              「独自の学習ノウハウ」で<br>
              フリーランスエンジニアを目指すことができます。<br>
            </p>
          </div>
        </div>
      </a>
      <a href="<?php echo home_url("service"); ?>">
        <div class="service_menu">
          <div class="service_menu_txt">
            <h2 class="service_menu_ttl">stageee</h2>
            <p class="service_menu_sentence">
              Stageee(ステージー)は<br>
              コーチングに特化した業務効率化支援ツールです。<br>
              <br>
              Web会議、面談予約、チャット、学習計画作成、<br>
              学習状況の把握、教材管理、指導報告書作成<br>
              といったコーチングにおいて必要な機能が<br>
              1つにまとまった業務効率化を支えるSaaSです。<br>
            </p>
          </div>
          <div class="service_menu_img">
            <img src="http://localhost/wp01/wp-content/uploads/2021/12/service_img2.jpg" alt="no image">
          </div>
        </div>
      </a>
    </div>

    <div class="about">
      <a href="<?php echo home_url("about"); ?>">
        <div class="about_top_row">
          <div class="top_ttl_about">
            <!--　ABOUTは白文字の為、個別指定-->
            <h1 class="top_ttl_txt">ABOUT</h1>
            <p class="top_title_sub">企業情報</p>
          </div>
          <div class="about_top_sentence">
            <span class="about_top_sentence_bold">Technology × Coaching<br></span>
            株式会社estraはデジタル化が遅れている教育業界に<br>
            最新のテクノロジーを導入することによって,教育のDXを実現します。<br>
            独自のオペレーションとコーチングを融合した新しい教育の仕組みにより、<br>
            一人ひとりに合わせた最適な教育を提供します。<br>
          </div>
        </div>
      </a>
      <div class="about_main">
        <div class="about_menu">
          <a href="<?php echo home_url("company"); ?>">
            <div class="about_menu_img">
              <img src="http://localhost/wp01/wp-content/uploads/2021/12/top_about_img1.png" alt="no image">
            </div>
            <div class="about_menu_txt">
              <h2 class="about_menu_ttl">COMPANY</h2>
              <p class="about_menu_ttl_sub">会社概要</p>
            </div>
          </a>
        </div>
        <div class="about_menu">
          <a href="<?php echo home_url("philosophy"); ?>">
            <div class="about_menu_img">
              <img src="http://localhost/wp01/wp-content/uploads/2021/12/top_about_img2.png" alt="no image">
            </div>
            <div class="about_menu_txt">
              <h2 class="about_menu_ttl">PHILOSOPHY</h2>
              <p class="about_menu_ttl_sub">経営理念</p>
            </div>
          </a>
        </div>
        <div class="about_menu">
          <a href="<?php echo home_url("greeting"); ?>">
            <div class="about_menu_img">
              <img src="http://localhost/wp01/wp-content/uploads/2021/12/greeting_img.png" alt="no image">
            </div>
            <div class="about_menu_txt">
              <h2 class="about_menu_ttl">GREETING</h2>
              <p class="about_menu_ttl_sub">代表挨拶</p>
            </div>
          </a>
        </div>
        <div class="about_menu">
          <a href="<?php echo home_url("member"); ?>">
            <div class="about_menu_img">
              <img src="http://localhost/wp01/wp-content/uploads/2021/12/environment_img3-scaled.jpg" alt="no image">
            </div>
            <div class="about_menu_txt">
              <h2 class="about_menu_ttl">MEMBER</h2>
              <p class="about_menu_ttl_sub">メンバー</p>
            </div>
          </a>
        </div>
      </div>
    </div>

    <a href="<?php echo home_url("recruit"); ?>">
      <div class="recruit">
        <div class="recruit_txt_column">
          <div class="top_ttl">
            <h1 class="top_ttl_txt">RECRUIT</h1>
            <p class="top_title_sub">採用情報</p>
          </div>
          <p class="recruit_txt">
            <span class="recruit_txt_bold">
              <br>
              日本の教育を変革する<br>
              最前線で活躍する人材に<br>
            </span>
            <br>
            全員がリスクを恐れずにチャレンジし、<br>
            社員一人一人が活躍できる環境を<br>
            みんなで作り上げる<br>
          </p>
        </div>
        <div class="recruit_menu_img">
          <img src="http://localhost/wp01/wp-content/uploads/2021/12/top_recruit_img.jpg" alt="no image">
        </div>
      </div>
    </a>

    <div class="top_menu_row">
      <div class="interview">
        <a href="<?php echo get_post_type_archive_link('interview'); ?>">
          <div class="interview_img">
            <img src="http://localhost/wp01/wp-content/uploads/2021/12/interview_img2.png" alt="no image">
          </div>
          <div class="top_ttl">
            <h1 class="top_ttl_txt">INTERVIEW</h1>
            <p class="top_title_sub">インタビュー</p>
          </div>
        </a>
      </div>

      <div class="environment">
        <a href="<?php echo home_url("environment"); ?>">
          <div class="environment_img">
            <img src="http://localhost/wp01/wp-content/uploads/2021/12/top_environment_img-scaled.jpg" alt="no image">
          </div>
          <div class="top_ttl">
            <h1 class="top_ttl_txt">ENVIRONMENT</h1>
            <p class="top_title_sub">働く環境</p>
          </div>
        </a>
      </div>

    </div>


  </main>

  <?php get_footer(); ?>