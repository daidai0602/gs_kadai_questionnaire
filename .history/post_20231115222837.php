<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    body {
      
    }
  </style>
</head>
<body>
  <form action="write.php" method="post" enctype="multipart/form-data">
    <p>投稿者： <input type="text" name="name" size="15"></p>
    <p>撮影日： <input type="date" name="date"></p>
    <p>コメント： <input type="text" name="comment" size="20" ></p>
    <p><input type="file" name="upload_image"accept=".jpg,.jpeg,.png" required></p>
    <p><input type="submit" class="btn_submit" value="送信"></p>
  </form>
  <ul>
    <li><a href="index.php">index.php</a></li>
  </ul>
</body>
</html>