<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>WED</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css">
    
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- ヘッダー -->
    <header class="header">
      <div class="header-inner">
        <div class="header-set">
          <h1 class="logo">
            <a href="<?php echo home_url(); ?>/index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="WED"></a>
          </h1>
          <nav class="nav">
            <ul class="nav-inner">
              <li class="nav-list"><a href="#news">NEWS</a></li>
              <li class="nav-list"><a href="#about">ABOUT</a></li>
              <li class="nav-list"><a href="#business">BUSINESS</a></li>
              <li class="nav-list"><a href="#company">COMPANY</a></li>
            </ul>
          </nav>
        </div>
        <div class="contact-btn">
          <a href="<?php echo home_url(); ?>/contact.html">お問い合わせ</a>
        </div>
      </div>
    </header>
