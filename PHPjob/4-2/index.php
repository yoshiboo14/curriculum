<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cheacktest4</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php
    require_once("pdo.php");
    require_once("getData.php");

    $getData = new getData();
    $getUserData = $getData->getUserData();
    $getPostData = $getData->getPostData();


    ?>

    <header>
        <img src="https://letsengineer.jp/storage/cms-files/1599315827_logo.png">
        <div class="login">
            <div class="one">
                <p>ようこそ 
                    <?php echo $getUserData["first_name"]. $getUserData["last_name"];?>
                     さん</p>
            </div>
            <div class="two">
                <p>最終ログイン日：
                    <?php echo $getUserData["last_login"];?>
                </p>
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
            <?php while ($row = $getPostData->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php 
                switch($row['category_no']){
                    case 1:
                        print "食事";
                        break;
                    case 2:
                        print "旅行";
                        break;
                    default :
                        print "その他";
                        break;
                }
                
                ?></td>
                <td><?php echo $row['comment']; ?></td>
                <td><?php echo $row['created']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <footer>
        <p>Y&I group.inc</p>
    </footer>
</body>
</html>