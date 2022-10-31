<!-- 関数-->

<?php
// ceil(切り上げ)
$i = 3.5;
echo ceil($i);

// floor(切り捨て)
$i = 5.2;
echo floor($i);

// round(四捨五入)
$i = 5.5;
echo round($i);

// pi()(円周率)
echo pi();
    
function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area; 
}

circleArea(2);

// mt_round(乱数,ランダムな値)
echo mt_rand(1, 100); 
// rand（）もあるが、mt_randの方が速度が速く、ほぼ同じ挙動なので、基本はmt_randを使用すれば良い


// strlen(文字列の長さ)
$str = "hogehoge";
echo strlen($str);

// strpos(検索)
$str = "yoneyama";
echo strpos($str, "a");// ただし、strposは 最初に出てくる順番 

// substr(文字列の切り取り)
// substr(対象の文字列, 開始位置, 文字数)
$str = "yoneyama";
echo substr($str, -2, 2);
// => maと出力される

// str_replace(置換)
// str_replace(置き換える前の文字列, 置き換えた後の文字列, 対象の文字列)
$str = "yoneyama";
echo str_replace("neya", "NEYA", $str);
// 「 空白を空文字で置き換える 」という意味で、空白を削除する、という使い方
$str = "I am Yoneyama";
echo str_replace(" ", "", $str);

// 日本語の文字列操作に関して
$str = "あいうえお";
    
echo strlen($str);
// => 15
// 実行すると、15と出力される。
// これは、日本語の文字が マルチバイト文字列 というものだから
// マルチバイトに対応したメソッドを使用してあげる
$str = "あいうえお";
echo mb_strlen($str);
// => 5

// printf（フォーマット化した文字列を出力）
// 今まで
$name = "米山さん";
$limit_number = 40;
echo $name."の残り時間はあと".$limit_number."です";
// printfを使うと
printf("%sの残り時間はあと%dです", $name, $limit_number);
// %s…文字列
// %d…数値

// 第2引数以降は入る順番で変数を入れます。
// 1番目に入るのは「米山さん」（$name）です。
// 2番目に入るのは「40」（$limit_time）です。

$limit_hour = 20;
$limit_minute = 10;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

$limit_hour = 4;
$limit_minute = 4;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
// %02dと02を入れることで、桁数を指定することができ、空いた桁に0を自動で入れてくれます

// sprintf（変数に代入できるprintf）
// printfはechoと同様出力をしますが、sprintfはフォーマット化して終わりです。
// そのため、出力するためには別途echoする必要があります。
$limit_hour = 4;
$limit_minute = 4;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

// sprintfだけでは出力までできない
$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo $limit_time;

?>
