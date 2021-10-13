<!DOCTYPE html>
<html lang="ja">

<head>
  <title>飲食店テンプレート6 | menu</title>
  <?php get_header(); ?>
</head>

<body>
  <div class="superwrapper-menu animsition">
  <?php get_template_part('includes/c-header'); ?>
    <div id="c-top" class="c-top">
      <div class="c-top__img">
        <img src="<?php echo get_template_directory_uri(); ?><?php echo get_template_directory_uri(); ?>/images/home/paella@pc.jpg" alt="">
      </div>
      <h1 class="c-top__tit clip-js1 left">
        <span class="c-txt-lr">menu</span>
      </h1>
    </div>
    <!-- /#top -->
    <div id="c-menu" class="c-menu">
      <div class="c-container">
        <div class="pdf-link">
          <a href="<?php echo esc_url( home_url('<?php echo get_template_directory_uri(); ?>/images/pdf')); ?>" target="_blank" rel="noopener noreferrer">PDFで見る</a>
        </div>
        <div class="menu-contents__list item">
          <div class="tab-panel">
            <!--tab-->
            <ul class="tab-group">
              <li class="tab tab-A is-active">Lunch</li>
              <li class="tab tab-B">Dinner</li>
              <li class="tab tab-C">Drink</li>
            </ul>
            <!--tab-contents-->
            <div class="panel-group">
              <div class="panel lunch is-show">
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Aランチ</p>
                    <p class="price">¥1,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Bランチ</p>
                    <p class="price">¥1,800</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Cランチ</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Dランチ</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Eランチ</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Fランチ</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Gランチ</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
              </div>
              <!-- panel-lunch END -->
              <div class="panel dinner">
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Aメニュー</p>
                    <p class="price">¥1,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Bメニュー</p>
                    <p class="price">¥1,800</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Cメニュー</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Dメニュー</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Eメニュー</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Fメニュー</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Gメニュー</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
              </div>
              <!-- panel-dinner END -->
              <div class="panel drink">
                <div class="panel__item">
                  <div class="panel__txt">
                    <p class="name">Aドリンク</p>
                    <p class="price">¥1,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__txt">
                    <p class="name">Bドリンク</p>
                    <p class="price">¥1,800</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__txt">
                    <p class="name">Cドリンク</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__txt">
                    <p class="name">Dドリンク</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__txt">
                    <p class="name">Eドリンク</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__txt">
                    <p class="name">Fドリンク</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__txt">
                    <p class="name">Gドリンク</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
              </div>
              <!-- panel-drink END -->
            </div>
          </div>
        </div>
        <p class="c-txt-xs">※上記以外にも旬のものを多数ご用意しております。</p>
      </div>
    </div>
    <!-- /c-menu -->
    <?php get_footer(); ?>

  </div>
  <!-- .superwrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/text-animation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <!-- <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script> -->
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/tab.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/reserve-btn.js"></script>
</body>

</html>