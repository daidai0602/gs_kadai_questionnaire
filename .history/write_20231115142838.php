<?php
$name = $_POST["name"];
$date = $_POST["date"];
$comment = $_POST["comment"];
$img = $_FILES["img"]["name"];
$c = ",";

//文字作成
$str = date("Y-m-d H:i:s").$c.$name.$c.$mail;

//画像を保存
move_uploaded_file($_FILES['img'])

//（4）$_FILESから保存先を取得して、images_after（ローカルフォルダ）に移す
//move_uploaded_file（第1引数：ファイル名,第2引数：格納後のディレクトリ/ファイル名）
uploaded_path = 'images_after/'.$img;
//echo $uploaded_path.'<br>';

$result = move_uploaded_file($_FILES['upload_image']['tmp_name'],$uploaded_path);

//File書き込み
$file = fopen("data/data.txt","a");
fwrite($file,$str."\n");
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
<li><a href="post.php">戻る</a></li>
</ul>
</body>
</html>