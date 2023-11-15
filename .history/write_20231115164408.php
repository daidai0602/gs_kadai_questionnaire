<?php
$name = $_POST["name"];
$date = $_POST["date"];
$comment = $_POST["comment"];
$c = ",";
// 文字作成
$str = date("Y-m-d H:i:s") . $c . $name . $c . $comment;

// input="file"でpost送信された情報の受け取り
if (!empty($_FILES)) {
    // ファイル名を取得
    $filename = $_FILES['upload_image']['name'];
    // move_uploaded_file（第1引数：ファイル名, 第2引数：格納後のディレクトリ/ファイル名）
    // 第2引数には絶対パスを使用
    $uploaded_path = 'images_after/' . $filename;
    $result = move_uploaded_file($_FILES['upload_image']['tmp_name'], $uploaded_path);
    if ($result) {
        $MSG = 'アップロード成功！ファイル名：' . $filename;
        $img_path = $uploaded_path;
    } else {
        $MSG = 'アップロード失敗！エラーコード：' . $_FILES['upload_image']['error'];
    }
} else {
    $MSG = '画像を選択してください';
}

// File書き込み
$file = fopen("data/data.txt", "a");
fwrite($file, $str . "\n");
fclose($file);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>
    <h1>アップロードを完了しました。</h1>
    <h2>./da</h2>
    <p><?= $str ?></p>
    <?php
    if (!empty($img_path)) { ?>
        <!-- （5）ローカルフォルダに移動した画像を画面に表示する -->
        <img src="<?php echo $img_path; ?>" alt="">
    <?php
    }
    ?>
    <ul>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>
</html>