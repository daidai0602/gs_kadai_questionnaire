<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="write.php" method="post">
    <p>投稿者： <input type="text" name="name" size="15"></p>
    <p>撮影日： <input type="date" name="date"></p>
    <p>コメント： <input type="text" name="comment" size="20" ></p>
    <p><input type="file" name="image"accept=".jpg,.jpe"></p>
    <p><input type="submit" value="送信"></p>
  </form>
  <ul>
    <li><a href="index.php">index.php</a></li>
  </ul>
</body>
</html>