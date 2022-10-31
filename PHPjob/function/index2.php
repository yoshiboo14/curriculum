<!-- 関数（配列） -->

<?php

// count（要素の数を数える） 
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
echo count($members);

// sort（要素の並べ替え）
$numbers = [26, 35, 17, 67, 45];
sort($numbers); //並び替えただけ
var_dump($numbers); //ここで表示
// sortは返却値が論理値（true / false）なため、
// var_dump(sort($numbers))としても、配列が表示されない

// in_array（配列に中にある要素が存在しているか）
// 公式　in_array(調べたい文字もしくは数値, 対象の配列)
// 論理値が結果として返る => bool(true)
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
var_dump(in_array("tanaka", $members));
// よくif文と一緒に用いられる
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
if (in_array("tanaka", $members)) {
    echo "田中さんがいるよ！";
} else {
    echo "田中さんはいないよ！";

// implode（配列を結合して文字列に変換）
//  implodeは第一引数で配列を結合させる際に入れたい文字を、第2引数で対象の配列を指定
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);
// 区切り文字は必要なくただ結合したいだけであれば、対象の配列だけを指定すればよい
$atstr = implode($members);

// explode（文字列を指定の区切りで配列にする）
// explodeはimplodeの逆
// 1配列をimplodeで文字列にする
// 2その文字列をexplodeでもとの配列に戻す
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);

$re_members = explode("@", $atstr);
var_dump($re_members);

// 今回は@を区切り文字として、配列に分割。 
// よく使うのは以下のようなカンマ区切りの文字列を配列にするとき
$str = "1,2,3,4,5";
$array = explode(",",$str);
var_dump($array);

?>