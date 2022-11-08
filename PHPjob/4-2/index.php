<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checktest4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require_once("pdo.php");
    require("getData.php");

    $getData = new getData();
    $getUserData = $getData->getUserData();
    $getPostData = $getData->getPostData();

    // 連想配列はechoで表示できないためvar_dumpを用いる
    // var_dump($getUserData) ;
    // echo $getUserData["id"];
    // echo $getUserData["first_name"];
    // echo $getUserData["last_name"];
    // echo "<br>";
    // echo $getUserData["last_login"];
    
    echo "<br>";
    
    // echo var_dump($getPostData);
    echo $getPostData["id"];
    echo $getPostData["title"];
    echo $getPostData["category_no"];
    echo $getPostData["comment"];
    echo $getPostData["created"];

    ?>

    <header>
        <img src="https://letsengineer.jp/storage/cms-files/1599315827_logo.png">
        <div class="login">
            <div class="one">
                <!-- <p>ようこそ  -->
                    <?php echo $getUserData["first_name"]. $getUserData["last_name"];?>
                     <!-- さん</p> -->
            </div>
            <div class="two">
                <!-- <p>最終ログイン日： -->
                    <?php echo $getUserData["last_login"];?>
                <!-- </p> -->
            </div>
        </div>
    </header>
    <div class="article">
        <table>
            <tr>
                <th>記事ID</th>
                <th>タイトル</th>
                <th>カテゴリ</th>
                <th>本文</th>
                <th>投稿日</th>
            </tr>
            <tr>
                <!-- <td><?php echo $getPostData["id"]; ?></td>
                <td><?php echo $getPostData["title"]; ?></td>
                <td><?php echo $getPostData["category_no"]; ?></td>
                <td><?php echo $getPostData["comment"]; ?></td>
                <td><?php echo $getPostData["created"]; ?></td> -->
            </tr>
            <tr>
                <!-- <td><?php echo $getPostData["id"]; ?></td> -->
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    <footer>
        <p>Y&I group.inc</p>
    </footer>
</body>
</html>