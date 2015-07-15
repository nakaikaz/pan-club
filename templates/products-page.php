<section class="product-thumbnails">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="content-title">商品一覧</h2>
      </div>
    </div>
    <div class="row">
      <div class="visible-xs-block visible-sm-block product-carousel">
        <?php foreach($obj->items as $item) : ?>
        <div class="col-xs-12">
          <a rel="gallery" class="thumbnail fancy-image" href="#<?php echo $item->id; ?>"
            data-title="<?php echo $item->name; ?>" data-comment="<?php echo $item->comment; ?>" data-price="<?php echo $item->price; ?>">
            <img class="img-responsive sync-image" src="<?php echo $base_url . '/' . $item->img; ?>" alt="<?php echo $item->name; ?>">
          </a>
          <div class="product-description">
            <h4 class="name"><?php echo $item->name; ?></h4>
            <p class="comment visible-xs visible-sm"><?php echo $item->comment; ?></p>
            <p class="price"><?php echo $item->price; ?>円/<?php echo $item->quantity; ?>個</p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <?php foreach($obj->items as $item) : ?>
      <div class="col-md-3 col-lg-2 visible-md-block visible-lg-block item">
        <a rel="gallery" class="thumbnail fancy-image visible-md-block visible-lg-block" href="#<?php echo $item->id; ?>"
          data-title="<?php echo $item->name; ?>" data-comment="<?php echo $item->comment; ?>" data-price="<?php echo $item->price; ?>">
          <img class="img-responsive sync-image" src="<?php echo $base_url . '/' . $item->img; ?>" alt="<?php echo $item->name; ?>">
        </a>
        <img class="img-responsive visible-xs-block visible-sm-block" src="<?php echo $base_url . '/' . $item->img; ?>" alt="<?php echo $item->name; ?>">
        <div class="product-description">
          <h4 class="name"><?php echo $item->name; ?></h4>
          <p class="comment visible-xs visible-sm"><?php echo $item->comment; ?></p>
          <p class="price"><?php echo $item->price; ?>円/<?php echo $item->quantity; ?>個</p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php foreach($obj->items as $item): ?>
  <div class="fancy-gallery" id="<?php echo $item->id; ?>">
    <img src="<?php echo $base_url . '/' . $item->img; ?>" alt="<?php echo $item->name; ?>"/>
  </div>
<?php endforeach; ?>
