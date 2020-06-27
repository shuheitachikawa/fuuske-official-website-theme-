<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.png">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/destyle.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lity.css">
  <title><?php bloginfo('title'); ?></title>
  <?php wp_head(); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

</head>


<body <?php body_class(); ?>>

  <!-- ヘッダー -->
  <header>
    <h1 class="title"><span id="title-main"class="txtl">Fuuske</span><br><span id= "title-sub" class="txtm"></span>Official Website</span></h1>
    <nav class="global-nav">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'place_global',
          'container' => false,
        )
      );
      ?>
      <!-- <ul class="nav-menu">
      //   <li><a class="nav-item">Top</a></li>
      //   <li><a class="nav-item">News</a></li>
      //   <li><a class="nav-item">Video</a></li>
      //   <li><a class="nav-item">Blog</a></li>
      //   <li><a class="nav-item">Goods</a></li>
      //   <li><a class="nav-item">More</a></li>
      //   </ul> -->
      <a class="nav-item" id="more-button-js" style="text-align:center">MORE</a>
    </nav>

  </header>

  <div class="header-spmain">
    <nav class="global-nav">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'place_global',
          'container' => false,
        )
      );
      ?>
      <!-- <ul class="nav-menu">
      //   <li><a class="nav-item">Top</a></li>
      //   <li><a class="nav-item">News</a></li>
      //   <li><a class="nav-item">Video</a></li>
      //   <li><a class="nav-item">Blog</a></li>
      //   <li><a class="nav-item">Goods</a></li>
      //   <li><a class="nav-item">More</a></li>
      //   </ul> -->
      <a class="nav-item" id="more-button-js" style="text-align:center">MORE</a>
    </nav>

    </div>
  
  <div class="header-sp">
    <h1 class="title-sp">Fuuske Official Website</h1>
  </div>
  
  
  <!-- ヘッダーサブメニュー -->
  <nav class="sub-nav" id="sub-nav-js">

    <?php
      wp_nav_menu(
        array(
          'theme_location' => 'place_sub',
          'container' => false,
          )
        );
        ?>

  <ul class="sub-nav-icons">
    <li class="sub-nav-icon"><a class="fab fa-facebook fa-3x" href="https://rua.jp/f/621195244594793" target=”_blank”></a></li>
    <li class="sub-nav-icon"><a class="fab fa-instagram fa-3x" href="https://rua.jp/i/fuuske_life" target=”_blank”></a></li>
    <li class="sub-nav-icon"><a class="fab fa-youtube fa-3x" href="https://www.youtube.com/channel/UCqmZWnDKLpt3QqZvcz6SkLg" target=”_blank”></a></li>
  </ul>

  <div class="close-img-area">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gnv_close.png" class="sub-nav-close" id="sub-nav-close-js">
  </div>
</nav>