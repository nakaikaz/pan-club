<section id="category-<?php echo $category; ?>" class="product-thumbnails">
  <div class="business-header hidden-xs" style="background-image: url('/img/category-<?php echo $category; ?>-cover.jpg');">
    <h3><?php echo $obj->description; ?></h3>
  </div>
  <div class="container">
    <div class="row visible-xs">
      <div class="col-xs-12">
        <h3 class="header-line"><?php echo $obj->description; ?></h3>
      </div>
    </div>
    <div class="row">
      <div class="product-carousel">
        <?php foreach($obj->items as $item) : ?>
        <div class="col-xs-12 col-md-3 col-lg-2 item">
          <a rel="gallery" class="thumbnail fancy-image visible-md-block visible-lg-block" href="#<?php echo $item->id; ?>"
            data-title="<?php echo $item->name; ?>" data-comment="<?php echo $item->comment; ?>" data-price="<?php echo $item->price; ?>">
            <img class="img-responsive" src="<?php echo '/' . $item->img; ?>" alt="<?php echo $item->name; ?>">
          </a>
          <img class="img-responsive visible-xs-block visible-sm-block" src="<?php echo '/' . $item->img; ?>" alt="<?php echo $item->name; ?>">
          <div class="product-description">
            <h4 class="name"><?php echo $item->name; ?></h4>
            <p class="comment visible-xs visible-sm"><?php echo $item->comment; ?></p>
            <p class="price"><?php echo $item->price; ?>円</p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<?php foreach($obj->items as $item): ?>
  <div class="fancy-gallery" id="<?php echo $item->id; ?>">
    <img src="<?php echo '/' . $item->img; ?>" alt="<?php echo $item->name; ?>"/>
  </div>
<?php endforeach; ?>
