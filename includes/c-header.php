    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class=" logo__img">
          <a href="<?php echo esc_url( home_url('/')); ?>">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class="logo__img">
          <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/')); ?>"><span>ホーム</span>
                <small>Home</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/menu')); ?>"><span>メニュー</span>
                <small>Menu</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>"><span>お知らせ</span><small>News</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link"
                href="<?php echo esc_url( home_url('https://tabelog.com/')); ?>"><span>ネット予約</span><small>reserve</small></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
      <div class="reserve-btn-js">
        <div class="reserve-btn-js__inner">
          <div class="reserve-btn-js__01">
            <span>ご</span>
            <span>予</span>
            <span>約</span>
          </div>
          <div class="reserve-btn-js__02 js-left">
            <div class="tel">
              <a href="tel:092-686-7954">電話予約</a>
            </div>
            <div class="net">
              <a href="#">ネット予約</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.reserve-btn -->
    </header>
    <!-- /.header -->