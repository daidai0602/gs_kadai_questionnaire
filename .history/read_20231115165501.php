<?php
session_start();
$data = $_SESSION['data'];

$name = $_POST["name"];
$date = $_POST["date"];
$comment = $_POST["comment"];

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


// （4）input="file"でpost送信された情報の受け取り
if(!empty($_FILES)){
 
  // ファイル名を取得
  $filename = $_FILES['upload_image']['name'];
   
  //move_uploaded_file（第1引数：ファイル名,第2引数：格納後のディレクトリ/ファイル名）
  // 第2引数に使う部分
  $uploaded_path = 'images_after/'.$filename;
  //echo $uploaded_path.'<br>';
   
  $result = move_uploaded_file($_FILES['upload_image']['tmp_name'],$uploaded_path);
   
  if($result){
    $MSG = 'アップロード成功！ファイル名：'.$filename;
    $img_path = $uploaded_path;
  }else{
    $MSG = 'アップロード失敗！エラーコード：'.$_FILES['upload_image']['error'];
  }
   
  }else{
    $MSG = '画像を選択してください';
  }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>日記</h1>
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