<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$c = ",";

//文字作成
$str = date("Y-m-d H:i:s").$c.$name.$c.$mail;

//File書き込み
$File = fopen()

?>


<p>名前：<?=$name?></p>
<p>メールアドレス：<?=$mail?></p>