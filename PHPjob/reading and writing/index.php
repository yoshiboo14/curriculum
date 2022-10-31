<!-- PHPは取得したデータを別ファイルに書き込んだり、別ファイルからデータを取得することもできる -->

<?php
// 別ファイルへの書き込み

// 書き込み対象のファイルを変数に格納しておく
$testFile = "test.txt";
$contents = "こんにちは！";

// 書き込みできるのかどうかはis_writableメソッドを用いる
// is_writable($testFile)でtestFileが書き込み可能か
// true,falseで返却してくれる
// そのため可否を条件分岐する
if (is_writable($testFile)) {
    
    // 書き込み可能なときの処理
    // とりあえず、確認のため、echoで表示だけさせる
    echo "writable!!";

    // 関数は変数に格納することができる

    // 対象のファイルを開く　fopen("対象のファイル")
    // 第２引数について（書き込みモード）
    // wは完全上書き（元々のデータを消して新しく上書き）
    // aは追記（元々のデータの後ろに続けて描かれる）
    $fp = fopen($testFile,"a");

    // 対象のファイルに書き込む　fwrite(開いたファイル,書き込む文字列)
    // ブラウザをリロードすると、test.txtに出力される
    echo fwrite($fp,$contents);

    // ファイルを閉じる 開きっぱなしだと無駄なメモリを消費してしまうので、忘れずに
    fclose($fp);

    // 書き込みした旨の表示
    echo "<br>";
    echo "finish writing";

} else {
    // 書き込み不可のときの処理
    echo "not writable!";
    // exit で処理を終了
    exit;
}


// ファイルからデータを読み込む
$test_file = "test2.txt";
    
// is_readable() 読み込み可能か真偽値で返却してくれる
if (is_readable($test_file)) {

    // 読み込み可能なときの処理
    // 対象のファイルを開く
    // rは読み込みモード
    $fp = fopen($test_file, "r");

    // 開いたファイルから1行ずつ読み込む
    // 読み込みの場合は、全て一括で内容を取得するわけではなく、1行ずつ読み込むのが通例です。
    // fgets関数はファイルを1行ずつ読み込む関数です。
    // これは決まった書き方なのですが、読み込めなくなるまでループ処理を実行します。
    while ($line = fgets($fp)) {

        // 改行コード込みで1行ずつ出力
        echo '<br>'.$line;
    }
    // ファイルを閉じる
    fclose($fp);

} else {
    // 読み込み不可のときの処理
    echo "not readable!";
    exit;
}
?>