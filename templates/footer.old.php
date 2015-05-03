    <footer>
      <div class="container text-center">
        <hr />
        <div class="row links">
          <div class="col-xs-12 col-md-3">
            <a href="/company">会社概要</a>
          </div>
          <div class="col-xs-12 col-md-3">
            <a href="/news">お知らせ</a>
          </div>
          <div class="col-xs-12 col-md-3">
            <a href="#">採用情報</a>
          </div>
          <div class="col-xs-12 col-md-3">
            <a href="/products">商品一覧</a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 copyright">&copy; 2015 有限会社オベリスク</div>
        </div>
      </div>
    </footer>

    <script src="<?php echo $base_url; ?>/js/jquery.min.js"></script>
    <script src="<?php echo $base_url; ?>/js/EventEmitter.min.js"></script>
    <script src="<?php echo $base_url; ?>/js/fakeLoader.min.js"></script>
    <script src="<?php echo $base_url; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $base_url; ?>/js/jquery.easing.min.js"></script>
    <script src="<?php echo $base_url; ?>/owl-carousel/owl.carousel.js"></script>
    <script src="<?php echo $base_url; ?>/js/wow.min.js"></script>
    <script src="<?php echo $base_url; ?>/lightbox/js/lightbox.min.js"></script>
<?php foreach($scripts as $script) : ?>
    <script src="<?php echo $base_url; ?>/js/<?php echo $script; ?>.min.js"></script>
<?php endforeach; ?>
  </body>
</html>