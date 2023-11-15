<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f8f8f8;;
      padding: 20px;
      wodth
      /* text-align: center; */
    }
    h1 {
      padding-bottom: 20px;
    }
    input[type=textarea]{
      height: 100px;
    }
    input[type=submit]{
      background-color: orange;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }

  </style>
</head>
<body>
  <h1>大島家の子育て記録</h1>
  <form action="write.php" method="post" enctype="multipart/form-data">
    <p>投稿者： <input type="text" name="name" size="15" required></p>
    <p>撮影日： <input type="date" name="date" required></p>
    <p>コメント： <input type="textarea" name="comment" size="20" required></p>
    <p><input type="file" name="upload_image"accept=".jpg,.jpeg,.png"></p>
    <p><input type="submit" class="btn_submit" value="送信"></p>
  </form>
</body>
</html>