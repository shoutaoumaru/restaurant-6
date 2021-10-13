    <footer class="p-footer">
      <div class="c-container">
        <div class="p-footer__wrap">
          <div class="p-footer__logo">
            <img src="/images/common/riv_logo_02.png" alt="">
          </div>
          <div class="p-footer__access">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13294.424791215795!2d130.4066263337204!3d33.589572591747626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191942250e0dd%3A0x7a79d2c5edd8fafe!2zUml2Um91bmQg5qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1633748908502!5m2!1sja!2sjp"
              style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <address>福岡市博多区博多駅前3-27-25-9F</address>
          </div>
          <div class="p-footer__nav">
            <ul>
              <li>
                <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>"><span class="c-txt-sm">ホーム</span>
                  <span class="c-txt-xs">Home</span></a>
              </li>
              <li>
                <a class="animsition-link" href="<?php echo esc_url( home_url('/menu')); ?>"><span class="c-txt-sm">メニュー</span>
                  <span class="c-txt-xs">Menu</span></a>
              </li>
              <li>
                <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>"><span class="c-txt-sm">お知らせ</span>
                  <span class="c-txt-xs">News</span></a>
              </li>
              <li>
                <a class="animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>"><span class="c-txt-sm">採用情報</span>
                  <span class="c-txt-xs">Recruit</span></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="copyright">&copy;2021 RivRound</div>
      </div>
    </footer>
    <!-- /.footer -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">ホーム</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/menu')); ?>">メニュー</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">お知らせ</a></li>
        </ul>
        <div class="contact-btn">
          <ul class="contact-btn-list">
            <li class="contact-btn-item">
              <a href="<?php echo esc_url( home_url('tel:05031599527')); ?>">
                <span class="tel">予約</span>
              </a>
            </li>
            <li class="contact-btn-item">
              <a href="<?php echo esc_url( home_url('https://tabelog.com/')); ?>">
                <span class="net">予約</span>
              </a>
            </li>
            <li class="contact-btn-item">
              <a href="<?php echo esc_url( home_url('https://www.instagram.com/?hl=ja')); ?>" target="_blank">
                <span class="insta">インスタグラム</span>
              </a>
            </li>
        </div>
        </ul>
      </nav>
    </div>
    <!-- /.mobile-menu -->
    <?php wp_footer(); ?>