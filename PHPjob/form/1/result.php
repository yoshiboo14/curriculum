<?php
// ここでinputの情報を変数として受け取る
$my_name = $_GET['my_name'];
$mail = $_GET['mail'];
$password = $_GET['password'];
?>
<p>私の名前は、<?php echo $my_name; ?></p>
<p>私のメールアドレスは<?php echo $mail; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>