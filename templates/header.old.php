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
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/css/theme.css" />
    <?php if(isset($include_map_api)) : ?>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <?php endif; ?>
  </head>
  <body id="page-top">

    <div id="loading"></div>

    <button class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>

    <!-- nav -->
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-expanded">
      <div class="container">
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="hidden active"><a href="#page-top" class="page-scroll"></a></li>
            <li><a href="#about" class="page-scroll">ぱんくらぶ</a></li>
            <li><a href="#products" class="page-scroll">商&emsp;&emsp;品</a></li>
            <li><a href="#news" class="page-scroll">お知らせ</a></li>
            <!--<li><a href="#campaign" class="page-scroll">キャンペーン</a></li>-->
            <li><a href="#access" class="page-scroll">アクセス</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /nav -->
