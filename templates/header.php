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
  <body id="page-top" style="background: url('img/bg.gif');">

    <div id="loading"></div>

    <!--<button class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>-->

    <!-- Nav tabs-->
    <!--<nav class="navbar navbar-custom navbar-fixed-top" role="tabpanel">
      <div class="container">
        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#top-page" aria-controls="top-page" role="tab" data-toggle="tab">ぱんくらぶ</a></li>
            <li role="presentation"><a href="#products-page" aria-controls="produts-page" role="tab" data-toggle="tab">商&emsp;&emsp;品</a></li>
            <li role="presentation"><a href="#guide-page" aria-controls="guide-page" role="tab" data-toggle="tab">ご利用ガイド</a></li>
            <li role="presentation"><a href="#contact-page" aria-controls="contact-page" role="tab" data-toggle="tab">コンタクト</a></li>
          </ul>
        </div>
      </div>
    </nav>-->

    <header>
      <h1><a href="<?php echo $base_url; ?>"><img src="img/pan-club.gif" alt="ぱんくらぶ"/></a></h1>
      <a id="menu-toggle" href="#" class="btn btn-dark btn-lg pull-right toggle"><i class="fa fa-bars"></i></a>
      <nav id="nav-wrapper">
        <h2><a href="<?php echo $base_url; ?>"><img src="img/pan-club-on-menu.gif" alt="ぱんくらぶ"/></a></h2>
        <a id="menu-close" href="#" class="btn btn-light btn-lg toggle"><i class="fa fa-times"></i></a>
        <ul class="tab-nav">
          <!--<li><a href="#top-page" aria-controls="top-page" role="tab" data-toggle="tab">ホーム</a></li>
          <li><a href="#about-page" aria-controls="about-page" role="tab" data-toggle="tab">ぱんくらぶとは</a></li>-->
          <li><a href="/about">ぱんくらぶとは</a></li>
          <li><a href="/products">商&emsp;&emsp;品</a></li>
          <li><a href="/guide">ご利用方法</a></li>
          <li><a href="/contact">コンタクト</a></li>
        </ul>
      </nav>
    </header>
