<?php
$name = $_POST["name"];
$gender = $_POST["gender"];
$mail = $_POST["mail"];
$age = $_POST["age"];
$c = ",";


//文字作成
$str = date("Y-m-d H:i:s").$c.$name.$c.$gender.$c.$mail.$c.$age;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>
<p><?=$str?></p>
<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>