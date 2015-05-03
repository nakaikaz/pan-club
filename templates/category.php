<?php
$scripts = array('nav', 'category');

$content = file_get_contents($base_url . '/json/category-' . $category . '.json');
$obj = json_decode($content);
include_once 'header.php';
/*echo $base_url . '/json/category-' . $category . '.json';
echo '<pre>';
print_r($obj->items);
echo '</pre>';*/
?>

<section id="category-<?php echo $category; ?>" class="product-thumbnails">
  <div class="business-header hidden-xs" style="background-image: url('<?php echo $base_url; ?>/img/category-<?php echo $category; ?>-cover.jpg');">
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
          <a class="thumbnail visible-md-block visible-lg-block" href="<?php echo $base_url . '/' . $item->img; ?>" data-lightbox="category-<?php echo $category; ?>"
            data-title="<h4><?php echo $item->name; ?></h4><p><?php echo $item->comment; ?></p>">
            <img class="img-responsive" src="<?php echo $base_url . '/' . $item->img; ?>" alt="<?php echo $item->name; ?>">
          </a>
          <img class="img-responsive visible-xs-block visible-sm-block" src="<?php echo $base_url . '/' . $item->img; ?>" alt="<?php echo $item->name; ?>">
          <div class="product-description">
            <h4 class="name"><?php echo $item->name; ?></h4>
            <p class="comment visible-xs visible-sm"><?php echo $item->comment; ?></p>
            <p class="price"><?php echo $item->price; ?>円</p>
          </div>
        </div>
        <?php endforeach; ?>
        <!--
        <div class="col-xs-12 col-md-3 col-lg-2 item">
          <a class="thumbnail" href="<?php echo $base_url; ?>/img/category-one/01.jpg" data-lightbox="01"
            data-title="<p class='pull-left'>角食パン</p><p class='pull-right'>食卓の定番です</p>">
            <img class="img-responsive" src="<?php echo $base_url; ?>/img/category-one/01.jpg" alt="">
          </a>
          <div class="product-description">
            <h4 class="name">角食パン</h4>
            <p class="comment visible-xs">食卓の定番です</p>
            <p class="price">４４０円</p>
          </div>
        </div>
        <div class="col-xs-12 col-md-3 col-lg-2 item">
          <a class="thumbnail" href="<?php echo $base_url; ?>/img/category-one/02.jpg" data-lightbox="02"
            data-title="<p class='pull-left'>山型食パン</p><p class='pull-right'>蓋無しで焼き上げています</p>">
            <img class="img-responsive" src="<?php echo $base_url; ?>/img/category-one/02.jpg" alt=""/>
          </a>
          <div class="product-description">
            <h4 class="name">山型食パン</h4>
            <p class="comment visible-xs">蓋無しで焼き上げています</p>
            <p class="price">４４０円</p>
          </div>
        </div>
         -->
      </div>
    </div>
  </div>
</section>

<?php include_once 'footer.php'; ?>