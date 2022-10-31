<?php
//POST送信で送られてきた名前を受け取って変数を作成

$name = $_POST["name"];

//①画像を参考に問題文の選択肢の配列を作成してください。

$netNumber=[80,22,20,21];
$lang=[PHP,Python,Java,HTML];
$command=[join,select,insert,update];

//② ①で作成した、配列から正解の選択肢の変数を作成してください

$trueNetNumber = $netNumber[0];
$trueLang = $lang[3];
$trueCommand = $command[1];
?>
<form action="answer.php" method="post">
    <input type="hidden" name="trueNetNumber" value=<?php echo $trueNetNumber; ?>>
    <input type="hidden" name="trueLang" value=<?php echo $trueLang; ?>>
    <input type="hidden" name="trueCommand" value=<?php echo $trueCommand; ?>>

    <p>お疲れ様です<?php echo $name; ?><input type="hidden" name="name2" value=<?php echo $name; ?>><!--POST通信で送られてきた名前を出力-->さん</p>
    <!--フォームの作成 通信はPOST通信で-->
    <h2>①ネットワークのポート番号は何番？</h2>

    <!--③ 問題のradioボタンを「foreach」を使って作成する-->

    <?php foreach($netNumber as $value){?>
        <input type="radio" name="selectedNum" value=<?php echo $value; ?> >
        <?php echo $value ?>
    <?php } ?>

    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->

    <?php foreach($lang as $oneLang){?>
        <input type="radio" name="selectedLang" value=<?php echo $oneLang; ?>>
        <?php echo $oneLang ?>
    <?php } ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->

    <?php foreach($command as $oneCommand){?>
        <input type="radio" name="selectedCommand" value=<?php echo $oneCommand; ?>>
        <?php echo $oneCommand ?>
    <?php } ?>


    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <br>
    <br>
        <input type="submit" value="回答する" > 
</form>
