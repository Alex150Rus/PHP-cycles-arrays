<?php

$mass = [
    'Московская область' => 'Москва, Зеленоград, Клин',
    'Ленинградская область' => 'Санкт-Петербург, Всеволожск, Павловск, Кронштадт',
    'Рязанская область' => 'названия городов можно найти на maps.yandex.ru :)'
];

var_dump($mass);

foreach ($mass as $key => $value) {
    echo "{$key}:<br>" . "$value<br>";
}

/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 29.11.2018
 * Time: 9:46
 */