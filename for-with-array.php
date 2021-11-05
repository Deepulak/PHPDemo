<html>
<head>
  <meta charset="utf-8">
    <title>While Loop</title>
  </head>
  <body>
    <?php
      $luckyNumbers = array(4, 8, 14, 16, 23, 42);
      for ($i = 0; $i < count($luckyNumbers); $i++) {
        echo "$luckyNumbers[$i] <br>";
      }
    ?>
</body>
</html>
