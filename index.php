<?php
require 'vendor/autoload.php';
require_once 'myview.php';

$app = new \Slim\Slim(array(
  'templates.path' => 'templates',
  // 公開時はデバッグモード削除
  'debug' => true
));

$myView = new myView('templates');

$app->hook('slim.before', function() use ($app){
  // Fetch the request’s URL (scheme + host [ + port if non-standard ])
  // slimが実行されバッファがアウトプットされる前なので、getUrl()でベースURLを取得できる
  $base_url = $app->request->getUrl() . '';
  $app->view()->appendData(array(
    'base_url' => $base_url,
    'myView' => new myView('templates')
  ));
});

// トップページ
$app->get('/', function() use ($app, $myView){
  $content = $myView->render('top-page.php', array('base_url' => $app->view()->getData('base_url')));
  $app->render('home.php', array('content' => $content));
});
// ぱんくらぶとは
$app->get('/about', function() use ($app, $myView){
  $content = $myView->render('about-page.php', array('base_url' => $app->view()->getData('base_url')));
  $app->render('home.php', array('content' => $content));
});
// 商品一覧ページ
$app->get('/products', function() use ($app, $myView){
  $obj = json_decode(file_get_contents('json/products.json'));
  $content = $myView->render('products-page.php', array('category' => 'one', 'obj' => $obj, 'base_url' => $app->view()->getData('base_url')));
  $app->render('home.php', array('title' => '商品一覧', 'content' => $content));
});
// ご利用方法
$app->get('/order', function() use ($app, $myView){
  $content = $myView->render('order-page.php', array('base_url' => $app->view()->getData('base_url')));
  $app->render('home.php', array('content' => $content));
});
// 会社概要
$app->get('/company', function() use ($app, $myView){
  $content = $myView->render('company-page.php');
  $app->render('home.php', array('title' => '会社概要', 'content' => $content));
});
// 採用情報
$app->get('/recruit', function() use ($app, $myView) {
  $content = $myView->render('recruit-page.php');
  $app->render('home.php', array('content' => $content));
});
// お知らせ
$app->get('/news', function() use ($app, $myView) {
  $content = $myView->render('news-page.php', array('base_url' => $app->view()->getData('base_url')));
  $app->render('home.php', array('content' => $content));
});

// デモ
$app->get('/demo', function() use ($app){
  $content = file_get_contents('templates/demo.php');
  $app->render('home.php', array('page' => 'top-page', 'content' => $content));
});


$app->run();
