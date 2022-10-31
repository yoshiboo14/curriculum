<form action="result2.php" method="post">
お名前：<input type="text" name="name">
<br>
ご希望商品：
<input type="radio" name = "product" value="A賞">A賞
<input type="radio" name = "product" value="B賞">B賞
<input type="radio" name = "product" value="C賞">C賞
<br>
個数：
<select name="quantity">
      <?php for ($i=1;$i<=10;$i++){ ?>
        <option value="<?php echo $i; ?>">
          <?php echo $i; ?>
        </option>
      <?php } ?>
    </select>

    <!-- 間違え -->
<!-- <select name="quantity"> -->
    <?php
    //for($i=1;$i<=10;$i++){      
        //<option value="{$i}">$i</option>
    //}
    // ?>
<!-- </select> -->
<br>
<input type="submit" value="申し込み">
</form>