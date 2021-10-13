<!DOCTYPE html>
<html lang="ja">

<head>
  <title>飲食店テンプレート6 | ホーム</title>
  <?php get_header(); ?>
</head>

<body>
  <div class="superwrapper">
    <?php get_template_part('includes/c-header'); ?>
    <main id="main-contents">
      <section class="top-view">
        <div class="hero">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img class="hero-img view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/sushi_1@sp.jpg" />
                <img class="hero-img view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/sushi_1@pc.jpg" />
              </div>
              <div class="swiper-slide">
                <img class="hero-img view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/paella@sp.jpg" />
                <img class="hero-img view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/paella@pc.jpg" />
              </div>
              <div class="swiper-slide">
                <img class="hero-img view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/wagyu_sp.jpg" />
                <img class="hero-img view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/wagyu_pc.jpg" />
              </div>
            </div>
          </div>
          <div class="scrolldown view-sp">
            <span>scroll</span>
          </div>
        </div>
        <div class="scrolldown view-pc">
          <span>scroll</span>
        </div>
      </section>
      <!-- /.top-view -->
      <section class="p-concept">
        <div class="p-concept__wrap">
          <div class="p-concept__desc">
            <div class="p-concept__title">
              <small class="clip-js left">CONCEPT</small>
              <h2><span class="c-txt-md">こだわり食材<br>こだわり技術</span></h2>
            </div>

            <p class="c-txt-sm">食の感動体験をテーマに、水々しい朝採れ野菜、90日熟成の神戸ビーフ、厳選した魚介をご提供します。</p>
          </div>
        </div>
        <div class="p-concept__img">
          <div class="c-container">
            <img class="parallax-down" src="<?php echo get_template_directory_uri(); ?>/images/home/pizza@sp.jpg" alt="">
            <img class="parallax-up" src="<?php echo get_template_directory_uri(); ?>/images/home/steak_2@sp.jpg" alt="">
          </div>
        </div>

      </section>
      <!-- /.p-concept -->
      <section class="p-special">
        <h2 class="p-special__title clip-js left">
          <span class="p-title">SPECIAL</span>
        </h2>
        <div class="hero">
          <div class="swiper-container2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="swiper-wrap">
                  <div class="swiper-img">
                    <img class="works-img" src="<?php echo get_template_directory_uri(); ?>/images/home/oliveoile.jpg" />
                  </div>
                  <div class="c-container">
                    <h2 class="sliderTitle"><span>OLIVEOIL</span>
                      <small>オリーブオイル</small></h2>

                    <p class="c-txt-sm">小豆島オリーブ園のオリーブオイルを使用。丁寧に手摘みされ、そして搾油されたオイルはまさに天然のジュースのようなフルーティで深い味わいです。</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="swiper-wrap">
                  <div class="swiper-img">
                    <img class="works-img" src="<?php echo get_template_directory_uri(); ?>/images/home/fish.jpg" />
                  </div>
                  <div class="c-container">
                    <h2 class="sliderTitle"><span>FISH</span>
                      <small>厳選された魚介</small></h2>
                    <p class="c-txt-sm">九州で獲れた脂の乗った新鮮な魚介たち。その時期の旬のものだけを使用してます。</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="swiper-wrap">
                  <div class="swiper-img">
                    <img class="works-img" src="<?php echo get_template_directory_uri(); ?>/images/home/drybeef.jpg" />
                  </div>
                  <div class="c-container">
                    <h2 class="sliderTitle"><span>MEET</span>
                      <small>90日熟成神戸ビーフ</small></h2>
                    <p class="c-txt-sm">神戸ビーフをドライエイジングで90日熟成させ肉の旨味を最大限に出してます。感動する味わいを是非お楽しみ下さい</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- pagination -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </section>
      <!-- /.p-specisl -->
      <section class="p-menu">
        <div class="c-container">
          <div class="p-menu__txt">
            <h2 class="p-menu__title">
              <span class="p-title clip-js left">MENU</span>
            </h2>
            <div class="p-menu__desc">
              <p class="c-txt-sm">90日熟成の神戸ビーフ、朝採れ野菜、地物の新鮮な魚介。とことん厳選した素材にこだわり、極上な「食の体験」をお手軽に。</p>
            </div>
          </div>
          <div class="p-menu__link">
            <a href="<?php echo esc_url( home_url('/menu')); ?>">
              <img class="parallax-img" src="<?php echo get_template_directory_uri(); ?>/images/home/paella@pc.jpg" alt="">
              <span>Menu</span>
            </a>
          </div>
        </div>
      </section>
      <!-- /.p-menu -->
      <section class="p-instagram">
        <div class="c-container">
          <div id="js-infiniteslide" class="gallery">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/home/steak_1@pc.jpg" alt="">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/home/sushi_1@pc.jpg" alt="">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/home/wagyu_pc.jpg" alt="">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/home/magurodon.jpg" alt="">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/home/salad_1@pc.jpg" alt="">
          </div>
          <h2 class="p-instagram__title">
            <a href="<?php echo esc_url( home_url('https://www.instagram.com/?hl=ja')); ?>" class="p-instagram-link">
              <p class="p-title clip-js left">INSTAGRAM</p>
              <p class="more-link">View more</p>
            </a>
          </h2>
        </div>
      </section>
      <!-- .p-instagram -->
      <section class="p-news">
        <div class="c-container appear up">
          <h2 class="p-title clip-js left">
            <span class="en">news</span>
          </h2>
          <ul class="p-news__list item">
            <?php query_posts('posts_per_page=3'); ?>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <li class="p-news__item">
                <a class="animsition-link" href="<?php the_permalink() ;?>">
                  <span class="p-news__date"><?php echo get_the_date(); ?></span>
                  <p class="p-news__content"><?php the_title(); ?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          <div class="readmore item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">
              <span>お知らせ一覧</span></a>
          </div>
        </div>
      </section>
      <!-- /.p-news -->
      <section class="p-contact">
        <div class="c-container">
          <a href="<?php echo esc_url( home_url('/contact')); ?>" class="p-contact-btn">
            <h2 class="p-contact__title">
              <p class="p-title clip-js left">CONTACT</p>
              <p class="c-txt-sm">お店についてのお問い合わせはこちら</p>
            </h2>
          </a>
        </div>
      </section>
      <!-- /.p-contact -->
    </main>
    <!-- /#main-contents -->
    <?php get_footer(); ?>
  </div>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/pace.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/swiper.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/hero-slider.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/simpleParallax.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/reserve-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/parallax.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/text-animation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/infiniteslide.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>
</body>

</html>