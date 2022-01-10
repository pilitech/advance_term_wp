  <footer class="footer">
    <div class="footer-ttl">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        株式会社estra
      </a>
      <p class="footer-ttl-sub">
        〒151-0051<br>
        東京都渋谷区千駄ヶ谷5-8-4　第7瑞穂ビル 4階<br>
      </p>
    </div>

    <nav class="footer-nav">
      <ul class="footer-nav-list">
        <li class="footer-nav-item"><a href="<?php echo home_url("service"); ?>">事業内容</a></li>
        <li class="footer-nav-item"><a href="<?php echo home_url("about"); ?>">企業情報</a></li>
        <li class="footer-nav-item"><a href="<?php echo home_url("recruit"); ?>">採用情報</a></li>
        <li class="footer-nav-item"><a href="<?php echo home_url("contact"); ?>">お問い合わせ</a></li>
        <li class="footer-nav-item"><a href="<?php echo home_url("policy"); ?>">プライバシーポリシー</a></li>
      </ul>
    </nav>
    <small class="copyright">
      Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?> ALL RIGHTS RESERVED.
    </small>
  </footer>

  <?php wp_footer(); ?>


  </body>

  </html>