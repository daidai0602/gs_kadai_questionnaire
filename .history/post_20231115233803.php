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
      width: 80%;
      /* text-align: center; */
    }
    img{
      width: 15%;
      padding: 0px 20px;
    }
 
    input{
      width: 100%;
    }
    input[type=textarea]{
      height: 100px;
    }
    input[type=file]{
      padding: 20px 0;
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
    <p>投稿者：<br>
       <input type="text" name="name" size="15" required></p>
    <p>撮影日：<br>
       <input type="date" name="date" required></p>
    <p>コメント：<br>
       <input type="textarea" name="comment" size="20" required></p>
    <p><input type="file" name="upload_image"></p>
    <p><input type="submit" class="btn_submit" value="送信"></p>
  </form>
  <img src="./pen.png" alt="">
  <img src="./kuji.jpg" alt="">
  <img src="./man.jpg" alt="">
</body>
</html>