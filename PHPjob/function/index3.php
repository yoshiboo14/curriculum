<!-- 関数（日付　時間） -->
<!-- プログラミングにおける日付、時刻の取り扱いでは、 UNIXタイムスタンプ という形式がよく使用される
タイムスタンプとは、 「1970年1月1日午前0時0分0秒」から、何秒経過しているか 表した数値です。
UNIXは、UNIX系OSの意味。 -->
<?php

// time(現在時刻を取得)
echo time();
var_dump(time());
// 10桁の数字が出てくる
// 現在時刻が1970/1/1 00:00:00 から何秒経過しているか 表示

// date(タイムスタンプから日付に戻す)
// 現在時刻を取得
echo date("Y-m-d H:i:s", time());
// 第一引数で、 表示させたいフォーマット 、第二引数で、タイムスタンプを指定

// 数値以外のところは比較的自由にできるため以下のようにもできる
echo date("Y年m月d日 H時i分s秒", time());

// strtotime（特定日付のタイムスタンプを取得）
// 2017年2月16日午前11時25分00秒のタイムスタンプを求めるのであれば
echo strtotime("2017/2/16 11:25:00");
// 日付ではない指定
// 先週の日曜日
echo strtotime("last Sunday");
// 2日後
echo strtotime("+2 day");

?>