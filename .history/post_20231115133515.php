<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="write.php" method="post">
    <p>投稿者： <input type="text" name="name" size="15"></p>
    <p>撮影日： <input type="date" min="2022-01-1"></p>
    <p>コメント： <input type="text" name="mail" size="20" ></p>
    <p><input type="file" value="photo"></p>
    <p><input type="submit" value="送信"></p>
  </form>
  <ul>
    <li><a href="index.php">index.php</a></li>
  </ul>
</body>
</html>