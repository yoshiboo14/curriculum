<!-- 動作OK -->

<?php
$my_name = $_POST["name"];
$product = $_POST["product"];
$quantity = $_POST["quantity"];
?>

<p><?php echo "お名前：{$my_name}"?></p>
<br>
<br>
<p><?php echo "ご希望商品：{$product}"?></p>
<br>
<br>
<p><?php echo "個数：{$quantity}"?></p>