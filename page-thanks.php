<?php 
/* Template Name: thanks
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>お問い合わせありがとうございます | </title>
  <?php get_header(); ?>
</head>
<body>
  <div class="superwrapper animsition">
    <div class="c-thanks">
      <?php get_template_part('includes/c-header'); ?>      
      <div class="c-thanks-text">
        <div class="c-container">
          <h2 class="c-title">お問い合わせありがとうございます。</h2>
          <div class="c-thanks-desc">
            <div class="c-thanks-item">
              <p class="c-txt-sm">ご入力いただいた情報は無事に送信されました。<br>お客様に受付完了メールを1通送信しましたのでご確認下さい。</p>
            </div>
            <div class="c-thanks-item">
              <h3>受付完了メールが届かない場合</h3>
              <p class="c-txt-sm">ご利用のメールサービスの設定によっては迷惑フォルダへ送られている場合もございますので、迷惑メールフォルダも合わせてご確認下さい。</p>
              <p class="c-txt-sm">もし、24時間経っても受付完了メールが届かない場合は、お手数ですが再度お問い合わせフォームかお電話にてお問い合わせ下さい</p>
            </div>
          </div>
          <div class="c-thanks-btn">
            <a class="animsition-link" href="/">トップページに戻る</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.c-thanks -->
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