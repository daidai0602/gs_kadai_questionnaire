<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$c = ",";
?>

$str = date("Y-m-d H:i:s").$c.$name.

<p>名前：<?=$name?></p>
<p>メールアドレス：<?=$mail?></p>