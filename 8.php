<?php

$mass = [
    'Московская область' => 'Москва, Зеленоград, Клин, Химки',
    'Ленинградская область' => 'Санкт-Петербург, Всеволожск, Павловск, Кронштадт',
    'Рязанская область' => 'названия городов можно найти на maps.yandex.ru :)'
];

var_dump($mass);

// решение не очень, так как, если после Клина поставить Химки, то они тоже выведутся.
// здесь регулярные выражения лучше справятся
foreach ($mass as $key => $value) {
    if (stristr($value, 'К')){
 echo "$key: " . stristr($value, 'К') . "<br>";
}
}

// это более верное решение
echo "<br><hr>";

foreach ($mass as $key => $value) {
    foreach((explode(', ', $value)) as $key2 => $value2) {
        if (stristr($value2, 'К')) {
            echo "$key: " . stristr($value2, 'К') . "<br>";
        }
    }
}

/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 30.11.2018
 * Time: 10:05
 */