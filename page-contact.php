<?php 
/* Template Name: contact
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>お問い合わせ | </title>
  <?php get_header(); ?>
</head>
<body class="animsition">
  <div class="contents-wrapper">
    <?php get_template_part('includes/c-header'); ?>      
    <section class="c-topview">
      <div class="c-topview__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_2.jpg" alt="">
        </div>
        <div class="c-topview__title">
          <h2 class="c-topview__text">
            <p class="c-txt-lr">お問い合わせ</p>
            <p class="c-txt-sm">CONTACT</p>
          </h2>
      </div>
    </section>
      <!-- /.c-topview -->
      <!-- コンタクトフォーム -->
    <div class="c-contact">
      <div class="contact-form">
          <div class="c-container">
            <h1 class="c-title">
              <span>CONTACT</span>
            </h1>
            <p class="c-contact-text">以下必要事項をご記入の上、「送信する」ボタンを押して下さい。</p>
            <?php echo apply_filters('the_content', '[contact-form-7 id="5" title="コンタクトフォーム 1"]'); ?>
          </div>
          </div>
          <!-- /コンタクトフォーム -->
      </div>
    </div>
    <!-- /.c-contsact -->
    <?php get_footer(); ?>
  </div>
  <!-- /.superwrapper -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
</body>
</html>
