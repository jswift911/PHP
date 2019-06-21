<?php
echo "Задание №1: " . PHP_EOL;
$i = 0;
$j = 100;
while ($i < $j) {
    if ($i % 3 === 0) {
        echo $i . PHP_EOL;
        $i++;
    }
    $i++;
}
?>
<br/><br/>
<?php
echo "Задание №2: " . PHP_EOL;
$i = 0;
do {
    if ($i === 0) {
        echo "$i - ноль" . PHP_EOL;
    } else if ($i % 2 === 1) {
        echo "$i - нечетное число" . PHP_EOL;
    } else {
        echo "$i - четное число" . PHP_EOL;
    }
    $i++;
} while ($i <= 10);
?>
<br/><br/>
<?php
echo "Задание №3: " . PHP_EOL;
$cities = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область" => ["Рязань", "Касимов", "Кораблино"],
];
foreach ($cities as $area => $city) {
    print_r("$area : ");
    foreach ($city as $cityName) {
        print_r("$cityName, ");
    }
}
?>
<br/><br/>
<?php
echo "Задание №4: " . PHP_EOL;
$word = "счастье";
function translit($word) {
    $trans = [
        "а" => "a",
        "б" => "b",
        "в" => "v",
        "г" => "g",
        "д" => "d",
        "е" => "e",
        "ж" => "zh",
        "з" => "z",
        "и" => "i",
        "й" => "i",
        "к" => "k",
        "л" => "l",
        "м" => "m",
        "н" => "n",
        "о" => "o",
        "п" => "p",
        "р" => "r",
        "с" => "s",
        "т" => "t",
        "у" => "u",
        "ф" => "f",
        "х" => "h",
        "ц" => "c",
        "ч" => "ch",
        "ш" => "sh",
        "щ" => "sch",
        "ъ" => "'",
        "ы" => "y",
        "ь" => "'",
        "э" => "e",
        "ю" => "yu",
        "я" => "ya",
    ];
    return strtr($word, $trans);
}
echo translit($word);
?>
<br/><br/>
<?php
echo "Задание №5: " . PHP_EOL;
$someWords = "Мама мыла раму";
function convertProbel($someWords) {
    $convert = [" " => "_"];
    return strtr($someWords, $convert);
}
echo convertProbel($someWords);
?>
<br/><br/>
<?php
echo "Задание №6: " . PHP_EOL;
$mounths = ["Январь","Февраль","Март"];
?>
<ul>
    <?php foreach ($mounths as $mounth) :?>
    <li>Название месяца: <?=$mounth?></li>
    <?php endforeach; ?>
</ul>

<?php
echo "Задание №7: " . PHP_EOL;
$j = 10;
for ($i = 0; $i < $j; print_r("$i".PHP_EOL), $i++) {
}
?>
<br/><br/>
<?php
echo "Задание №8: " . PHP_EOL;
$cities = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область" => ["Рязань", "Касимов", "Кораблино"],
];
foreach ($cities as $area => $city) {
    print_r("$area : ");
    foreach ($city as $cityName) {
        if (mb_substr($cityName, 0, 1) == "К") {
            print_r("$cityName, ");
        }
    }
}
?>
<br/><br/>
<?php
echo "Задание №9: " . PHP_EOL;
$word = "Мама мыла раму";
function translitWithProbel($word) {
    $trans = [
        "а" => "a",
        "б" => "b",
        "в" => "v",
        "г" => "g",
        "д" => "d",
        "е" => "e",
        "ж" => "zh",
        "з" => "z",
        "и" => "i",
        "й" => "i",
        "к" => "k",
        "л" => "l",
        "м" => "m",
        "н" => "n",
        "о" => "o",
        "п" => "p",
        "р" => "r",
        "с" => "s",
        "т" => "t",
        "у" => "u",
        "ф" => "f",
        "х" => "h",
        "ц" => "c",
        "ч" => "ch",
        "ш" => "sh",
        "щ" => "sch",
        "ъ" => "'",
        "ы" => "y",
        "ь" => "'",
        "э" => "e",
        "ю" => "yu",
        "я" => "ya",
        " " => "_",
    ];
    return strtr($word, $trans);
}
echo translitWithProbel($word);
?>