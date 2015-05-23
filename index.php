<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim(array(
  'templates.path' => 'templates',
  // 公開時はデバッグモード削除
  'debug' => true
));

$app->hook('slim.before', function() use ($app){
  // Fetch the request’s URL (scheme + host [ + port if non-standard ])
  // slimが実行されバッファがアウトプットされる前なので、getUrl()でベースURLを取得できる
  $base_url = $app->request->getUrl();
  //$rootUri = $app->request->getRootUri();
  $app->view()->appendData(array(
    'base_url' => $base_url
  ));
});

// トップページ
$app->get('/', function() use ($app){
  $app->render('home.php', array('page' => 'top-page'));
});
// ぱんくらぶとは
$app->get('/about', function() use ($app){
  $app->render('home.php', array('page' => 'about-page'));
});
// 商品
//$app->get('/products', function() use ($app){
//  $app->render('home.php', array('page' => 'products-page'));
//});
// ご利用方法
$app->get('/order', function() use ($app){
  $app->render('home.php', array('page' => 'order-page'));
});
// 会社概要
$app->get('/company', function() use ($app){
  $app->render('company.php', array('title' => '会社概要', 'include_map_api' => true ));
});
$app->get('/company-old', function() use ($app){
  $app->render('company.old.php', array('title' => '会社概要', 'include_map_api' => true));
});
// 商品一覧ページ
$app->group('/products', function() use ($app){
  $app->get('/', function() use ($app){
    $app->render('home.php', array('page' => 'products-page', 'title' => '商品一覧'));
  });
  // 商品の各カテゴリー
  $app->get('/category-one', function() use ($app){
    $content = file_get_contents('json/category-one.json');
    //echo $content;
    $obj = json_decode($content);
    $app->view->appendData(array('test' => 'abc'));
    $app->render('home.php', array('page' => 'category-page', 'title' => 'ロールパン', 'content' => $content));
  });
  $app->get('/category-two', function() use ($app){
    $app->render('category.php', array('title' => 'デニッシュ', 'category' => 'two'));
  });
  $app->get('/category-three', function() use ($app) {
    $app->render('category.php', array('title' => '菓子パン', 'category' => 'three'));
  });
  $app->get('/category-four', function() use ($app) {
    $app->render('category.php', array('title' => '調理パン', 'category' => 'four'));
  });
  $app->get('/category-five', function() use ($app) {
    $app->render('category.php', array('title' => '洋菓子・和菓子', 'category' => 'five'));
  });
  $app->get('/category-six', function() use ($app) {
    $app->render('category.php', array('title' => 'その他', 'category' => 'six'));
  });
});
// テスト
$app->get('/welcome', function() use ($app){
  $app->render('welcome.php');
});
// デモ
$app->get('/demo', function() use ($app){
  $app->render('demo.php');
});


$app->run();
