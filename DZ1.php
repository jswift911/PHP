<?php
$a = 5;
$b = '05';
var_dump($a == $b);         // php преобразует строку в число
var_dump((int)'012345');     // При преобразовании в число ноль впереди убирается
var_dump((float)123.0 === (int)123.0); // Потому что разный тип данных
var_dump((int)0 === (int)'hello, world'); // Одинаковый тип данных
?>
<br><br>
<?php
// Задание 4*
$today = getdate();
$hours = $today['hours'];
$minutes = $today['minutes'];
$seconds = $today['seconds'];
echo "Текущее время: $hours:$minutes:$seconds"
?>
<br><br>
<?php
// Задание 5*
$a=1;
$b=2;
// переприсваиваем переменные
$a=2;
$b=1;
echo "a = $a, b = $b"
?>
