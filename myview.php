<?php
class MyView {
  protected $base_dir;
  protected $defaults;
  protected $layout_variables = array();

  public function __construct($base_dir, $defaults = array()) {
    $this->base_dir = $base_dir;
    $this->defaults = $defaults;
  }

  public function setLayoutVar($name, $value) {
    $this->layout_variables[$name] = $value;
  }

  public function render($_path, $_variables = array(), $_layout = false) {
    $file = $this->base_dir . '/' . $_path;
    extract(array_merge($this->defaults, $_variables));
    // バッファリングをオン
    ob_start();
    // 自動フラッシュをオフ
    ob_implicit_flush(0);
    // コンパイルするファイルを読み込んで、引数で与えられた変数を評価
    require $file;
    // バッファの内容を取得し、出力バッファを消去
    $content = ob_get_clean();

    if($_layout) {
      $content = $this->render($_layout, array_merge($this->layout_variables, array('_content' => $content)));
    }

    return $content;
  }
}
?>
