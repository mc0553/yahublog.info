<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo wp_get_document_title(); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/manu.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/resupomsibe.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <!-- パンくずリスト -->
    <div class="space-breadcrumb">
      <?php custom_breadcrumb(); ?>
      <div class="hamburger">
        <span class="icon"></span>
      </div>
    </div>

    <div class="header">
      <!-- Navigation -->
      <nav id="navi" class="navi" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
        <div id="navi-in" class="navi-in">
          <?php wp_nav_menu(
            array(
              //カスタムメニュー名
              'theme_location' => 'header-navi',
              //コンテナを表示しない
              'container' => false,
              //カスタムメニューを設定しない際に固定ページでメニューを作成しない
              'fallback_cb' => false,
              //出力されるulに対してidやclassを表示しない
              'items_wrap' => '<ul>%3$s</ul>',
            )
          ); ?>
        </div>
      </nav>
      <!-- /Navigation -->

    </div>

  </header>