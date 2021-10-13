<?php 
/* Template Name: privacy
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>プライバシーポリシー | </title>
  <?php get_header(); ?>
</head>
<body>
  <div class="superwrapper animsition">
    <div class="c-privacy">
      <?php get_template_part('includes/c-header'); ?>      
      <div class="c-privacy-text">
        <div class="c-container">
          <h1 class="c-title">プライバシーポリシー</h1>
          <div class="c-privacy-desc">
            <div class="c-privacy-item">
              <h3>このサイトが収集する個人データと収集の理由</h3>
              <p class="c-txt-sm">本プライバシーポリシーにおける「個人情報」とは，個人情報保護法にいう生存する個人に関する情報、ならびに特定の個人と結びついて使用されるメールアドレス、電話番号などの情報、および個人情報と一体となった趣味、家族構成、年齢、その他の個人に関する属性情報のことを指します。</p>
            </div>
            <div class="c-privacy-item">
              <h3>お申し込みフォーム</h3>
              <p class="c-txt-sm">当社では、お問い合わせ頂いた際にお名前・メールアドレス等の個人情報をご記入頂きます。これらの個人情報は、必要な情報をご連絡するために利用し、それ以外の目的では利用しません。</p>
            </div>
            <div class="c-privacy-item">
              <h3>個人情報の第三者への開示・提供の禁止</h3>
              <p class="c-txt-sm">当社は、収集した個人情報等を個人情報保護法及び行政書士法に基づき、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。</p>
              <p class="c-txt-sm">・本人のご了解がある場合 法令等への協力のため、開示が必要となる場合<br>・人の生命、身体又は財産の保護のために必要がある場合であって、本人の同意を得ることが困難である場合<br>・個人情報の安全対策<br>・警察や検察、裁判所、消費者センター等公的機関等によって開示を求められた場合<br></p>
              <p class="c-txt-sm">個人情報の開示・訂正・追加・削除・利用停止をご希望の場合には、ご本人であることを確認したうえで、速やかに対応致します。 なお、個人情報に関するお問い合わせはでお受けいたします。</p>
            </div>
          </div>
          <div class="c-privacy-btn">
            <a href="/contact">お問い合わせページ</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.c-contact -->
    <?php get_footer(); ?>
  </div>
  <!-- /.superwrappers -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
</body>
</html>