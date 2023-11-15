<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$c = ",";


?>

<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>
<p><?=$name?></p>
<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>