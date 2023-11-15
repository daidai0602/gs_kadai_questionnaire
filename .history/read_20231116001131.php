<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>子育て記録の一覧</h1>
  <table border="1">
    <tr>
      <th>投稿日時</th>
      <th>投稿者</th>
      <th>撮影日</th>
      <th>コメント</th>
      <th>画像</th>
    </tr>
    <?php
    $filename = "data/data.txt";
    $img_directory = "images_after/. $filename";

    // ファイルが存在するか確認
    if (file_exists($filename)) {
        $lines = file($filename, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            $data = explode(",", $line);

            echo "<tr>";
            echo "<td>" . $data[0] . "</td>";
            echo "<td>" . $data[1] . "</td>";
            echo "<td>" . $data[2] . "</td>";
            echo "<td>" . $data[3] . "</td>";
            if (isset($data[4])) {
                $img_path = $img_directory . trim($data[4]);
                if (file_exists($img_path)) {
                    echo "<td><img src='" . $img_path . "' width='100'></td>";
                } else {
                    echo "<td>画像なし</td>";
                }
            } else {
                echo "<td>画像なし</td>";
            }
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>データがありません</td></tr>";
    }
    ?>
  </table>
  <a href="post.php">投稿画面へ</a>
</body>
</html>
