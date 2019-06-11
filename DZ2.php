<?php
echo "Задание №1: " . PHP_EOL;
$a = 5;
$b = 9;
if ($a >= 0 && $b >= 0) {
    echo $a - $b;
} else if ($a < 0 && $b < 0) {
    echo $a * $b;
} else {
    echo $a + $b;
}
?>
<br><br>
<?php
echo "Задание №2: " . PHP_EOL;
$a = 8;
switch ($a) {
    case 0:
        echo $a . PHP_EOL;
        $a++;
    case 1:
        echo $a . PHP_EOL;
        $a++;
    case 2:
        echo $a . PHP_EOL;
        $a++;
    case 3:
        echo $a . PHP_EOL;
        $a++;
    case 4:
        echo $a . PHP_EOL;
        $a++;
    case 5:
        echo $a . PHP_EOL;
        $a++;
    case 6:
        echo $a . PHP_EOL;
        $a++;
    case 7:
        echo $a . PHP_EOL;
        $a++;
    case 8:
        echo $a . PHP_EOL;
        $a++;
    case 9:
        echo $a . PHP_EOL;
        $a++;
    case 10:
        echo $a . PHP_EOL;
        $a++;
    case 11:
        echo $a . PHP_EOL;
        $a++;
    case 12:
        echo $a . PHP_EOL;
        $a++;
    case 13:
        echo $a . PHP_EOL;
        $a++;
    case 14:
        echo $a . PHP_EOL;
        $a++;
    case 15:
        echo $a . PHP_EOL;
        $a++;
}
?>
<br><br>
<?php
echo "Задание №3: " . PHP_EOL;
$a = 10;
$b = 5;

function summa($a, $b)
{
    return $a + $b;
}

function raznost($a, $b)
{
    return $a - $b;
}

function proizvedenie($a, $b)
{
    return $a * $b;
}

function delenie($a, $b)
{
    if ($b == 0) {
        return "На ноль делить нельзя";
    }
    return $a / $b;
}

echo summa($a, $b) . PHP_EOL;
echo raznost($a, $b) . PHP_EOL;
echo proizvedenie($a, $b) . PHP_EOL;
echo delenie($a, $b) . PHP_EOL;
?>
<br><br>
<?php
echo "Задание №4: " . PHP_EOL;
$a = 20;
$b = 10;
$operation = "summa";
function mathOperation($a, $b, $operation)
{
    switch ($operation) {
        case 'summa':
            return summa($a, $b);
        case 'raznost':
            return raznost($a, $b);
        case 'proizvedenie':
            return proizvedenie($a, $b);
        case 'delenie':
            return delenie($a, $b);
        default:
            return "Другая операция";
    }
}

echo mathOperation($a, $b, $operation);
?>
<br><br>
<?php
echo "Задание №6: " . PHP_EOL;
$val = 2;
$pow = 4;
function power($val, $pow)
{
    if ($pow == 0) {
        return 1;
    }
    return $val * power($val, $pow - 1);
}

echo power($val, $pow);
?>
<br><br>
<?php
echo "Задание №7: " . PHP_EOL;
$today = getdate();
$hours = $today['hours'];
$minutes = $today['minutes'];
$seconds = $today['seconds'];
function timeNow($hours, $minutes, $seconds)
{
    if (($hours % 100) >= 11 && ($hours % 100) <= 20) {
        $sklonHours = "часов";
    } else
        switch ($hours % 10) {
            case 1:
                $sklonHours = "час";
                break;
            case 2:
            case 3:
            case 4:
                $sklonHours = "часа";
                break;
            default:
                $sklonHours = "часов";
        }
    if (($minutes % 100) >= 11 && ($minutes % 100) <= 20) {
        $sklonMinutes = "минут";
    } else
        switch ($minutes % 10) {
            case 1:
                $sklonMinutes = "минута";
                break;
            case 2:
            case 3:
            case 4:
                $sklonMinutes = "минуты";
                break;
            default:
                $sklonMinutes = "минут";
        }
    if (($seconds % 100) >= 11 && ($seconds % 100) <= 20) {
        $sklonSeconds = "секунд";
    } else
        switch ($seconds % 10) {
            case 1:
                $sklonSeconds = "секунда";
                break;
            case 2:
            case 3:
            case 4:
                $sklonSeconds = "секунды";
                break;
            default:
                $sklonSeconds = "секунд";
        }
    return "Текущее время: $hours $sklonHours $minutes $sklonMinutes $seconds $sklonSeconds";
}

echo timeNow($hours, $minutes, $seconds);
?>
