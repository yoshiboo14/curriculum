<?php
  //商品の税込価格を計算しましょう
  //①税率を定数TAXで作成しましょう。消費税は10%とします。
  //②商品の情報を連想配列に入れましょう。
  //③税率を計算する関数を用意します。
  //引数には値段を受け取り、税込価格を返答します。
  //④繰り返し文を使って画面に指定の文字を表示しましょう！


define("TAX", 1.1);

$products = ["鉛筆" => 110, "消しゴム" => 165, "物差し" => 550];


function taxIncludedPrice($value){
    echo $value * TAX ;
}    

foreach($products as $key => $value){
    echo "<br>";
    echo taxIncludedPrice($value);
}

?>