<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <meta name="description" content="">
    <title>
    <?php if(isset($title)) : ?>
    <?php echo $title; ?> | Newsite
    <?php else : ?>
      Newsite
    <?php endif; ?>
    </title>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/css/fakeLoader.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/owl-carousel/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/owl-carousel/owl.theme.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/owl-carousel/owl.transitions.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/lightbox/css/lightbox.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/css/pan-club.css" />
    <?php if(isset($include_map_api)) : ?>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <?php endif; ?>
  </head>
  <body id="page-top" style="background: url('<?php echo $base_url; ?>/img/bg.gif');">

    <div id="loading"></div>

    <header>
      <div class="header-background" style="background-image: url('img/bg.gif');"></div>
      <h1><a href="<?php echo $base_url; ?>"><img src="<?php echo $base_url; ?>/img/pan-club.png" alt="ぱんくらぶ"/></a></h1>
      <a id="menu-toggle" href="#" class="btn btn-lg pull-right toggle"><i class="fa fa-bars"></i></a>
      <nav id="nav-wrapper">
        <h2><a href="<?php echo $base_url; ?>"><img src="../img/pan-club.png" alt="ぱんくらぶ"/></a></h2>
        <a id="menu-close" href="#" class="btn btn-lg toggle"><i class="fa fa-times"></i></a>
        <ul class="tab-nav">
          <li><a href="/about">ぱんくらぶとは</a></li>
          <li><a href="/products">商&emsp;&emsp;品</a></li>
          <li><a href="/order">ご利用方法</a></li>
          <li><a href="/contact">コンタクト</a></li>
        </ul>
      </nav>
    </header>
