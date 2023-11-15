<?php
$name = $_POST["name"];
$date = $_POST["date"];
$comment = $_POST["comment"];
$filename = $_FILES["upload_image"]["name"];
$c = ",";

//文字作成
$str = date("Y-m-d H:i:s").$c.$name.$c.$mail;

//$_FILESから保存先を取得して、images_after（ローカルフォルダ）に移す
//move_uploaded_file（第1引数：ファイル名,第2引数：格納後のディレクトリ/ファイル名）
$uploaded_path = 'images_after/'.$filename;
//echo $uploaded_path.'<br>';

$result = move_uploaded_file($_FILES['upload_image']['tmp_name'],$uploaded_path);
echo $result

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

<?php
if(!empty($img_path)){  ?>
<!-- （5）ローカルフォルダに移動した画像を画面に表示する -->
 <img src="echo <?php $img_path;?>" alt="">
 <?php
}
?>

<ul>
<li><a href="post.php">戻る</a></li>
</ul>
</body>
</html>