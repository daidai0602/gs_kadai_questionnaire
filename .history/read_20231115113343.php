<?php
//ファイルを変数に格納
$filename = "data/data.txt";
//fopenでファイルを開く
$fp = fopen($filename, 'r');
//whileで行末までループ処理を行う
$text = [];
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
  
</body>
</html>