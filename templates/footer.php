  <footer style="background: url('<?php echo $base_url; ?>/img/bg_footer.gif');">
    <div class="container">
      <div class="row">
        <div class="col-md-3 box">
          <h3>八戸営業所</h3>
          <p>〒031-0801<br />青森県八戸市江陽５丁目１５−１２</p>
          <p><i class="fa fa-phone"></i>0178-73-2121</p>
          <p><i class="fa fa-fax"></i>0178-73-2122</p>
          <hr class="visible-xs-block" />
        </div>
        <div class="col-md-3 box">
          <h3>盛岡営業所</h3>
          <p>〒020-0127<br />岩手県盛岡市前九年２丁目１３−２３</p>
          <p><i class="fa fa-phone"></i>019-647-4649</p>
          <p><i class="fa fa-fax"></i>019-647-4645</p>
          <hr class="visible-xs-block" />
        </div>
        <div class="col-md-3 box">
          <h3>秋田営業所</h3>
            <p>〒011-0936<br />秋田県秋田市将軍野南３丁目９−１０</p>
            <p><i class="fa fa-phone"></i>018-816-0067</p>
            <p><i class="fa fa-fax"></i>018-816-0068</p>
            <hr class="visible-xs-block" style="margin-bottom: 0;"/>
        </div>
        <div class="col-md-3 box">
          <div class="row links">
            <div class="col-md-12">
              <a href="<?php echo $base_url; ?>/company">会社概要</a>
            </div>
            <div class="col-md-12">
              <a href="<?php echo $base_url; ?>/news">お知らせ</a>
            </div>
            <div class="col-md-12">
              <a href="<?php echo $base_url; ?>/recruit">採用情報</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="full-width">
      <div class="copyright">&copy; 2015 有限会社オベリスク</div>
    </div>
  </footer>

  <script src="<?php echo $base_url; ?>/js/jquery.min.js"></script>
  <script src="<?php echo $base_url; ?>/js/fakeLoader.min.js"></script>
  <script src="<?php echo $base_url; ?>/js/EventEmitter.min.js"></script>
  <script src="<?php echo $base_url; ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo $base_url; ?>/js/jquery.easing.min.js"></script>
  <script src="<?php echo $base_url; ?>/owl-carousel/owl.carousel.js"></script>
  <script src="<?php echo $base_url; ?>/js/wow.min.js"></script>
  <script src="<?php echo $base_url; ?>/fancybox/jquery.fancybox.pack.js"></script>
  <script src="<?php echo $base_url; ?>/js/pan-club.js"></script>
  <?php if(isset($no_header_transition)) : ?>
    <script>$('header .header-background').addClass('header-background-fixed');</script>
  <?php endif; ?>
  </body>
</html>
