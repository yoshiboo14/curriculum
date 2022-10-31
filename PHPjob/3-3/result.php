<?php 
  date_default_timezone_set('Asia/Tokyo');
?>
<?php
  //②フォームからのデータを受け取ります
$name = $_POST["name"];
$figure = $_POST["omikuji"];

  //③受け取った数字に1~6までのランダムな数字を掛け合わせて
  //変数に入れてください
$rand = mt_rand(1,6);

$mult =  $rand * $figure;

  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
if(10>=$mult){
    $result = "凶";
}elseif(15>=$mult){
    $result = "小吉";
}elseif(20>=$mult){
    $result = "中吉";
}elseif(25>=$mult){
    $result = "吉";
}elseif(36>=$mult){
    $result = "大吉";
}else{
    $result = "残念";
}

  //⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう
  echo date("Y-m-d H:i:s", time())."<br>";
  echo "名前は{$name}です"."<br>";
  echo "番号は{$mult}です。"."<br>";
  echo "結果は{$result}です"."<br>";

?>