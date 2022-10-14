<!-- 出力 echo -->
<?php
echo 'Hello World!';
echo 1234;
?>
<html>
  <p>
    I say that
    <?php echo 'Hello World';?>
  </p>
</html>


<!-- 変数の定義 -->
<?php
$message = 'Hello World';
echo $message;
?>
<!-- $変数名 = 値 -->
<!-- $から始まること -->
<!-- 英数字、_は使用可能 -->
<!-- $の直後に数字はつけられない（$7elevenは悪い例） -->
<!-- 大文字と小文字は区別される（$Appleと$appleは違う変数） -->


<!-- 改行 -->
<!-- echo '<br>' -->
<?php
$message = 'Hello World';
echo $message;
echo '<br>';

$x=8;
$y=3;
echo $x;
echo '<br>';
echo $y;
?>


<!-- 変数の型を出力 -->
<!-- var_dump -->
<?php
$message='hello world';
echo var_dump($message);
?>
<!-- string型　文字列 -->
<!-- int型　整数 -->
<!-- float型　少数 -->


<!-- 論理値 -->
<!-- true false (真偽値)のこと -->
<?php
$flag = true;
echo '<br>';
var_dump($flag);
?>
<!-- 論理値はbool(ブール)と表示される -->
<!-- ブーリアンの略でtrueとfalseをまとめてまとめて言う -->


<!-- null型 -->
<!-- 変数に何も入ってない状態 -->
<?php
$emp = null;
var_dump($emp);
?>


<!-- 変数展開 -->
<!-- 変数がダブルコーテーションで囲まれた場合は
変数の中の値に置き換わるという特色のこと -->
<!-- 変数を{}で囲む -->
<!-- シングルコーテーションでは変数展開が行われない -->
<?php
$name = "甲斐";
echo "私は{$name}です";
?>


<!-- 定数の定義 -->
<!-- define("定数名","格納する値") -->
<?php
define("admin_email","aaa@gmail.com");

echo '<br>';
// 出力
echo admin_email
?>


<!-- 演算子 -->

<?php
// 連結演算子
// 間に.(ドット)を用いる
echo "<br>";
echo "おは"."よう"."ござ"."います";
$hello = "ハロー";
$world = "ワールド";
echo "<br>";
echo $hello.$world;

// 四則演算子
echo 10-5;

// 単項演算子
// $x = $x+3
echo "<br>";
$x = 0;
$x += 4;
echo $x;
?>

<!-- 条件分岐(if文) -->
<!-- 構文はjsと同じ -->
<?php
echo "<br>";
$height = 163;

if($height>=170){
    echo "あなたはこのアトラクションを利用できます";
}else{
    echo "あなたはこのアトラクションを利用できません";
}

// 複数条件分岐
// (AND演算) A && B
// (OR演算) A || B 
// (NOT演算) A != B

// switch文（比較演算子を使わないパターン）
// break(switch文からの脱出、処理終了の合図)
// (動作OK)
$color = "yellow";

echo "<br>";
switch($color){
case "blue":
  print "進んでください";
  break;
case "yellow":
  print "注意してください";
  break;
case "red":
  print "止まってください";
  break;

// default(elseと同じ役割)
default:
echo "caseColorを選択してください";
}

// 三項演算子(if文の簡潔な書き方)

$creditNumber = "";

echo ($creditNumber != "") ? "入力が完了しました" : "クレジットカードの番号を入力してください" ;

// 補足
// === は型まで比較する
// また現場では==を使うことは少なく===に慣れておいたほうが良い

// チャレンジ問題(動作OK)
$name = "tar";
$pass = "pas";

echo "<br>";
if($name === "taro" && $pass === "pass" ){
  echo "ログイン成功です";
} elseif($name === "taro" && $pass !== "pass" ){
  echo "パスワードが間違っています";
}elseif($name !== "taro" && $pass === "pass" ){
  echo "名前が間違っています";
}else{
  echo "入力が間違っています";
}
?>


<!-- ループ文 真である限り処理を繰り返す -->
<?php
// while
// 7の段
$num = 1;
while($num < 9){
  echo "<br>";
  echo $num * 7;
  $num ++; //←これがないと無限ループが起きてしまう
}

// do while文
// do{
//   実行する処理
// }while(条件式)

// for文
// for(初期化式,条件式,変化式){
//   実行する処理
// }
echo "<br>";
for($i=0;$i>10;$i++){
  echo $i *10;
}

// break
//条件分岐と繰り返し処理の組み合わせ
for($num=1; $num < 6; $num++){
  echo $num;
  if($num%3===0){
    break;
  }
}

// チャレンジ問題
// OK(動作OK)
echo "<br>";
$Num = 0;
while($Num<=100){
  echo $Num;
  $Num ++ ;

}
?>


<!-- 配列 -->
<?php
$animals = ["うさぎ","とら","とり","うま","いぬ"];
echo $animal[0];

// var_dump(配列名)で配列全体を表示
echo var_dump($animals);

// 連想配列（jsのオブジェクトに似ている）

$fruits = ["apple" => "りんご", "orange" => "みかん","grape" => "ぶどう"];
echo "<br>";
echo $fruits["apple"];
echo $fruits["orange"];
echo $fruits["grape"];

//配列（要素）の追加
// $fruits[3] = "ばなな";
// $fruits["banana"] = "ばなな" ;

// チャレンジ問題
echo "<br>";
$color = ["red" => "赤", "blue" => "青", "green" => "緑"];
echo var_dump($color);
echo "<br>";
$color["yellow"] = "黃";
echo var_dump($color);
?>


<!-- foreach文 -->
<!-- 順番に一つずつ取り出して繰り返し処理を行う -->
<?php

// 1 $fruitsの配列を持ってきて、そこから1個取り出して$valueに入れる。
// 2 $valueに関して、処理を実行する。
// 3 処理が終わったら、次の1個を持ってきて、また$valueに入れる。
// 4 1〜3を配列の全ての要素に対してループさせる。

// 連想配列の場合
// as以降の文が異なる

?>
