<!-- 入力フォームの作成 -->

<!-- action データを渡すページ -->
<!-- method 通信する手段を指定 今回はgetで送る -->
<form action="result.php" method="get">

    <!-- type textやpasswordなど表示の指定 -->
    <!-- name inputに入れた値を入れた変数名のイメージ -->
  名前：<input type="text" name="my_name" />
  <br>
  <!-- チャレンジ問題 -->
  メールアドレス：<input type="text" name="mail"/>
  <br>
  パスワード：<input type="password" name="password" />
  <br>
  <input type="submit" value="送信" />

</form>

<!-- getとpost -->
<!-- getはurlに送信したデータinputを表示する（パスワードも映るので危ない） -->
<!-- postはurlに表示しないため見られたくない情報がある時に使える -->

<!-- type="radio"  性別など一つだけ選択できるボタンを作成できる-->
<!-- type="hidden"  「隠しフォーム」と呼ばれるもので、画面には表示されないがフォームで送信できる-->
<!-- type="disabled"  inputタグの中に用いることで「表示はされるが選択できない」フォームを作成できる-->
<!-- disabledはhiddenと一緒に用いられうことが多い -->

<!-- selectタグ  -->
<!-- 年齢：
    <select name="age">
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
    </select> -->
<!-- 各optionタグにはそれぞれvalueを設定 -->
<!-- 要はそれが選択されたときに送信される値 -->

<!-- 受け取るときは、今までと同じ
$age = $_POST['age']; -->

selectタグはPHPのループ文と一緒に使用することが多い。    
    <!-- <select name="number">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select> -->
    
いちいち書くの面倒

<!-- <select name="number"> -->
    <?php //for ($i=1;$i<=10;$i++){ ?>
        <!-- <option value="<?php echo $i; ?>"> -->
          <?php //echo $i; ?>
        <!-- </option> -->
      <?php //} ?>
    <!-- </select> -->



<!-- チャレンジ問題 -->