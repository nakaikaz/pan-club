<?php
include_once 'header.php';
?>

    <!-- Tab panels -->
    <?php
    // 画面遷移後に、data-pageの値のphpファイルをロードする
    ?>
    <div id="tab-content" data-page="<?php echo $page; ?>">
      <?php echo $content; ?>
    </div>

<?php
include_once 'footer.php';
?>
