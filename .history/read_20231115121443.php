<?php
//ファイルを変数に格納
$filename = "data/data.txt";
//fopenでファイルを開く
$fp = fopen($filename, 'r');
//whileで行末までループ処理を行う
$txt = [];
while(!feof($fp)){
  $txt[] = explode(",", fgets($fp));
}

///fcloseでファイルを閉じる
fclose($fp);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>アンケート集計結果</h1>
  <table>
    <?php
      //ここで表示処理を行う
      for($i=0; $i<count($txt)-1; $i++){
        echo "<tr>";
            echo "<td>".$txt[$i][0]."</td>";
            echo "<td>".$txt[$i][1]."</td>";
            echo "<td>".$txt[$i][2]."</td>";
            echo "<td>".$txt[$i][3]."</td>";
            echo "<td>".$txt[$i][4]."</td>";
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>