<?php
$fd = fopen("comments.txt", 'a+') or die("не удалось создать файл");
$str = $_POST['comments'] . PHP_EOL;
fwrite($fd, $str);
fclose($fd);

$filename = 'comments.txt';

function readComment($filename) {
    $data = [];
    $file = fopen($filename, 'r');
    if (!$file) return false;

    while (!feof($file)) { // пока файл не кончился, продолжаем цикл
        $line = fgets($file, 9999);
        $data[] = $line;
    }
    foreach ($data as $line => $word) {
        if (isset($word)) {
            return print_r($word);
        }
    }
    return fclose($file);
}
?>