<?php
require 'vendor/autoload.php';
require_once 'myview.php';

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
  $content = file_get_contents('templates/top-page.php');
  $app->render('home.php', array('page' => 'top-page', 'content' => $content));
});
// ぱんくらぶとは
$app->get('/about', function() use ($app){
  $content = file_get_contents('templates/about-page.php');
  $app->render('home.php', array('page' => 'about-page', 'content' => $content));
});
// ご利用方法
$app->get('/order', function() use ($app){
  $content = file_get_contents('templates/order-page.php');
  $app->render('home.php', array('page' => 'order-page', 'content' => $content, 'no_header_transition' => true));
});
// 会社概要
$app->get('/company', function() use ($app){
  $content = file_get_contents('templates/company-page.php');
  $app->render('home.php', array('title' => '会社概要', 'include_map_api' => true, 'content' => $content));
});
$app->get('/company-old', function() use ($app){
  $app->render('company.old.php', array('title' => '会社概要', 'include_map_api' => true));
});
// 商品一覧ページ
$app->group('/products', function() use ($app){
  $myView = new myView('templates');
  $app->get('/', function() use ($app){
    $content = file_get_contents('templates/products-page.php');
    $app->render('home.php', array('page' => 'products-page', 'title' => '商品一覧', 'content' => $content, 'no_header_transition' => true));
  });
  // 商品の各カテゴリー
  $app->get('/category-one', function() use ($app, $myView){
    $obj = json_decode(file_get_contents('json/category-one.json'));
    $content = $myView->render('category-page.php', array('category' => 'one', 'obj' => $obj));
    $app->render('home.php', array('page' => 'category-page', 'title' => 'ロールパン', 'content' => $content, 'no_header_transition' => true));
  });
  $app->get('/category-two', function() use ($app, $myView){
    $obj = json_decode(file_get_contents('json/category-two.json'));
    $content = $myView->render('category-page.php', array('category' => 'two', 'obj' => $obj));
    $app->render('home.php', array('page' => 'category-page', 'title' => 'デニッシュ', 'content' => $content));
  });
  $app->get('/category-three', function() use ($app, $myView) {
    $obj = json_decode(file_get_contents('json/category-three.json'));
    $content = $myView->render('category-page.php', array('category' => 'three', 'obj' => $obj));
    $app->render('home.php', array('page' => 'category-page', 'title' => '菓子パン', 'content' => $content));
  });
  $app->get('/category-four', function() use ($app, $myView) {
    $obj = json_decode(file_get_contents('json/category-four.json'));
    $content = $myView->render('category-page.php', array('category' => 'four', 'obj' => $obj));
    $app->render('home.php', array('page' => 'category-page', 'title' => '調理パン', 'content' => $content));
  });
  $app->get('/category-five', function() use ($app, $myView) {
    $obj = json_decode(file_get_contents('json/category-five.json'));
    $content = $myView->render('category-page.php', array('category' => 'five', 'obj' => $obj));
    $app->render('home.php', array('page' => 'category-page', 'title' => '洋菓子・和菓子', 'content' => $content));
  });
  $app->get('/category-six', function() use ($app, $myView) {
    $obj = json_decode(file_get_contents('json/category-six.json'));
    $content = $myView->render('category-page.php', array('category' => 'six', 'obj' => $obj));
    $app->render('home.php', array('page' => 'category-page', 'title' => 'その他', 'content' => $content));
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
