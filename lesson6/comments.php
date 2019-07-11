<?php
$fd = fopen("comments.txt", 'a+') or die("не удалось создать файл");
$str = $_POST['comments'] . PHP_EOL;
fwrite($fd, $str);
fclose($fd);
?>