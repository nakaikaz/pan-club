  <footer style="background: url('img/bg_footer.gif');">
    <div class="container text-center">
      <div class="row links">
        <div class="col-xs-12 col-md-4">
          <a href="/company">会社概要</a>
        </div>
        <div class="col-xs-12 col-md-4">
          <a href="/news">お知らせ</a>
        </div>
        <div class="col-xs-12 col-md-4">
          <a href="#">採用情報</a>
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
  <script src="<?php echo $base_url; ?>/js/pan-club.js"></script>
  <?php if(isset($include_access)) : ?>
    <script src="<?php echo $base_url; ?>/js/access.js"></script>
  <?php endif; ?>
  </body>
</html>
