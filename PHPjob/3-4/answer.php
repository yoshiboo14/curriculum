<link rel="stylesheet" href="./CSS/style2.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
// $question = "question.php";
// is_readable($question);
$Name = $_POST["name2"];

$selectedNum = $_POST["selectedNum"];
$selectedLang = $_POST["selectedLang"];
$selectedCommand = $_POST["selectedCommand"];

$trueNetNumber = $_POST["trueNetNumber"];
$trueLang = $_POST["trueLang"];
$trueCommand = $_POST["trueCommand"];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

function Answer($select,$answer){
    if($select === $answer){
        echo "正解！";
    }else{
        echo "残念・・・";
    }
}
?>

<div class="container">
    <p><!--POST通信で送られてきた名前を表示--><?php echo $Name ?>さんの結果は・・・？</p>
    
    <p>①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php Answer($selectedNum,$trueNetNumber);?>
    
    <p>②の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php Answer($selectedLang,$trueLang);?>
    
    <p>③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php Answer($selectedCommand,$trueCommand);?>
</div>
